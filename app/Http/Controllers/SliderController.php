<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function add(Request $request)
    {

        $slider=new slider();

        $slider->title=$request->title;
        $slider->link=$request->link;
        $slider->save();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('public')->delete($slider->image);
            $path = $request->file('image')->storeAs('sliderimages',$slider->id.'.'.$extension);

            $slider->image= $path;

            $slider->save();
        }
        if($slider->save())
        {
            Session::put('success-msg','Slider Successfully Added');
        }
        return redirect(route('admin.slider.getAll'));
    }

    public function deleteOne($id)
    {
        $slider=slider::find($id);
        $slider->is_deleted="1";
        if($slider->save())
        {
            Session::put('success-msg',"Slider Successfully Deleted");
        }
        return redirect(route('admin.slider.getAll'));
    }
    public function active($id)
    {
        if(slider::where('user_id',\auth()->user()->id)->get()->count()>5)
        {
            Session::put('success-msg',"You can active slides on less than 5");
            return redirect(route('admin.slider.getAll'));
        }
        $slider=slider::find($id);
        $slider->is_active="1";
        if($slider->save())
        {
            Session::put('success-msg',"Slide Successfully Activated");
        }
        return redirect(route('admin.slider.getAll'));
    }
    public function unactive($id)
    {
        $slider=slider::find($id);
        $slider->is_active="0";
        if($slider->save())
        {
            Session::put('success-msg',"Slide Successfully unactivated");
        }
        return redirect(route('admin.slider.getAll'));
    }
    public function update(Request $request,$id)
    {

        $slider=slider::find($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('public')->delete($slider->image);
            $path = $request->file('image')->storeAs('sliderimages',$slider->id.'.'.$extension);

            $slider->image= $path;

            $slider->save();
        }
        $slider->title=$request->title;
        $slider->link=$request->link;
        if($slider->save())
        {
            Session::put('success-msg',"Slider Successfully Updated");
        }
        return redirect(route('admin.slider.getAll'));
    }
    public function getAll()
    {
        $items=slider::where('user_id',Auth::user()->id)->where('is_deleted','0')->get();

        return view('slider.all')->with('items',$items);
    }
}

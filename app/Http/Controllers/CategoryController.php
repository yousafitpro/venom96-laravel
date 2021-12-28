<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\slider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
        ]);

        if ($validator->fails())
        {
            return Redirect::route('category.add')->withErrors($validator);
        }
        $category=new category();
        $category->type=$request->type;
        $category->name=$request->name;
        if($request->hasFile('image'))
        {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('public')->delete($category->thumbnail);
            $path = $request->file('image')->storeAs('gameimages',$category->id.'.'.$extension);

            $category->thumbnail= $path;

            $category->save();
        }
        if($category->save())
        {
            Session::put('success-msg','Game Successfully Added');
        }
        return redirect(route('admin.category.getAll'));
    }

    public function deleteOne($id)
    {
        $category=category::find($id);
        $category->is_deleted="1";
        if($category->save())
        {
            Session::put('success-msg',"Game Successfully Deleted");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function update(Request $request,$id)
    {

        $category=category::find($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('public')->delete($category->thumbnail);
            $path = $request->file('image')->storeAs('gameimages',$category->id.'.'.$extension);

            $category->thumbnail= $path;

            $category->save();
        }
        $category->type=$request->type;
        $category->name=$request->name;
        if($category->save())
        {
            Session::put('success-msg',"Game Successfully Updated");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function set_as_new($id)
    {
        $slider=category::find($id);
        $slider->is_new="1";
        if($slider->save())
        {
            Session::put('success-msg',"Operation Successful");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function set_as_old($id)
    {
        $slider=category::find($id);
        $slider->is_new="0";
        if($slider->save())
        {
            Session::put('success-msg',"Operation Successful");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function getAll()
    {
        $items=category::where('user_id',Auth::user()->id)->where('is_deleted','0')->get();

        return view('category.all')->with('items',$items);
    }
}

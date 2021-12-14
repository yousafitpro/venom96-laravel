<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
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
        $category->name=$request->name;

        if($category->save())
        {
            Session::put('success-msg','category Successfully Added');
        }
        return redirect(route('admin.category.getAll'));
    }

    public function deleteOne($id)
    {
        $category=category::find($id);
        $category->is_deleted="1";
        if($category->save())
        {
            Session::put('success-msg',"category Successfully Deleted");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function update(Request $request,$id)
    {

        $category=category::find($id);
        $category->name=$request->name;
        if($category->save())
        {
            Session::put('success-msg',"category Successfully Updated");
        }
        return redirect(route('admin.category.getAll'));
    }
    public function getAll()
    {
        $items=category::where('user_id',Auth::user()->id)->where('is_deleted','0')->get();

        return view('category.all')->with('items',$items);
    }
}

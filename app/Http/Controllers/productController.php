<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class productController extends Controller
{
    public function addView()
    {
        $cates=category::where('user_id',\auth()->user()->id)->get();
        return view('product.add')->with(['cates'=>$cates]);
    }
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'=>'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        if ($validator->fails())
        {
            return Redirect::route('admin.product.add')->withErrors($validator)->withInput();
        }
        $product=new product();
        $product->name=$request->name;
        $product->type=$request->type;
        $product->status=$request->status;
        $product->price=$request->price;

        $product->category_id=$request->category;
        $product->secret_info=$request->secretdata;
        $product->short_info=$request->shortdata;
        if($product->save())
        {
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                Storage::disk('public')->delete($product->thumbnail);
                $path = $request->file('image')->storeAs('productimages',$product->id.'.'.$extension);

                $product->thumbnail= $path;

                $product->save();
            }
            Session::put('success-msg','product Successfully Added');
        }
        return redirect(route('admin.product.add'));
    }
    public function getOne(Request $request,$id)
    {
        $product=product::find($id);
        $cates=category::where('user_id',\auth()->user()->id)->get();
        return view('product.update')->with('product',$product)->with(['request'=>$request,'cates'=>$cates]);
    }
    public function deleteOne($id)
    {
        $product=product::find($id);
        $product->status="0";
        if($product->save())
        {
            Session::put('success-msg',"product Successfully Deleted");
        }
        return redirect(route('admin.product.getAll'));
    }
    public function update(Request $request,$id)
    {

        $product=product::find($id);
        $product->name=$request->name;
        $product->type=$request->type;
        $product->price=$request->price;
        $product->category_id=$request->category;

        $product->secret_info=$request->secretdata;
        $product->short_info=$request->shortdata;
        $product->status=$request->status;
        if($product->save())
        {
            Session::put('success-msg',"product Successfully Updated");
        }
        return redirect(route('admin.product.getAll'));
    }
    public function getAll()
    {
        $items=product::where('user_id',Auth::user()->id)->where('is_deleted','0')->get();
        return view('product.all')->with('items',$items);
    }
}

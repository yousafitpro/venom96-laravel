<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderProduct;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderProductController extends Controller
{
    public function addToCart(Request $request,$id)
    {
        $order_id=null;
        if ($request->order_id==null)
        {
            $no=new order();
            $no->user_id=auth()->user()->id;
            $no->save();
            $order_id=$no->id;
        }
        else
        {
            $order_id=$request->order_id;
        }
        $product=product::find($id);
        $op=null;
        if (orderProduct::where("user_id",auth()->user()->id)
            ->where('order_id',$order_id)
            ->where('product_id',$id)->exists()
        )
        {
           $op=orderProduct::find($id);
        }
        else
        {
            $op=new orderProduct();
        }

        $op->order_id=$order_id;
        $op->user_id=auth()->user()->id;
        $op->product_id=$id;
        $op->price=$product->price;
        $op->save();
        Session::put('success-msg','product Successfully Added');
        return response()->json(['order_id'=>$order_id,'url'=>route('home.cart',$order_id)]);
    }
    public function cart(Request $request,$id)
    {
        $products=orderProduct::where('order_id',$id)->get();
        foreach ($products as $p)
        {
            $p->product=product::find($p->product_id);
        }
        $total=0;
        foreach ($products as $p)
        {
            $total=$total+($p->quantity*$p->price);
        }

//        dd($products);
        return view('frontend.pages.cart',['products'=>$products,'total'=>$total]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class myhomeController extends Controller
{
    public function gameDetails($id)
    {
        $cate=category::find($id);
        return view('frontend.pages.gamedetails')->with(['item'=> $cate]);
    }
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function productDetails($id)
    {
        $product=product::find($id);
        return view('frontend.pages.product',['product'=>$product]);
    }
    public function productCart($id)
    {
        return view('frontend.pages.cart');
    }
    public function productList($id)
    {
        return view('frontend.pages.product-list');
    }
}

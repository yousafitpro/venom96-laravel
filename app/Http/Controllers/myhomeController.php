<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class myhomeController extends Controller
{
    public function gameDetails($id)
    {
        $cate=category::find($id);
        $products=Helper::GameProducts($id);
        return view('myfrontend.pages.product-list',['item'=> $cate,'products'=>$products]);
    }
    public function index()
    {
        return view('frontend.pages.index');
    }
    public function productDetails($id)
    {

        $product=product::find($id);
        return view('myfrontend.pages.product',['product'=>$product]);
    }
    public function productCart($id)
    {
        return view('myfrontend.pages.cart');
    }
    public function productList($id)
    {
        $cate=category::find($id);
        $products=Helper::GameProducts($id);
        return view('frontend.pages.product-list',['item'=> $cate,'products'=>$products]);
    }
}

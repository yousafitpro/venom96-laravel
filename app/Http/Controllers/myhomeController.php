<?php

namespace App\Http\Controllers;

use App\Models\category;
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
}

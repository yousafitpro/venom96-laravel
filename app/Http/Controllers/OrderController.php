<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getAll()
    {
        $items=category::where('user_id',Auth::user()->id)->where('is_deleted','0')->get();

        return view('order.all')->with('items',$items);
    }
}

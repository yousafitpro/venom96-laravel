<?php

namespace App\Helpers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Helper extends Controller
{
    public static function Products()
   {
       return product::where('deleted_at',null)->get();

   }
}

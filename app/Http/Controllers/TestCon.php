<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\role;
use App\Models\slider;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestCon extends Controller
{

public static function AddEntry()
{
    $role=new role();
    $role->user_id="1";
    $role->name="User";
    $role->save();
}
}

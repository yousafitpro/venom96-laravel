<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class slider extends Model
{
    use HasFactory;
    public function __construct()
    {
        if(Auth::check())
        {
            $this->user_id=Auth::user()->id;
        }

    }
    protected $appends = array('ImageURL' => '');
    public function getImageUrlAttribute()
    {

        return asset(slider::find($this->id)->image);
    }
}

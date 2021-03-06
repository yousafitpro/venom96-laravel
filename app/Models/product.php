<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class product extends Model
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

        return asset(product::find($this->id)->thumbnail);
    }
    public function category()
    {
        return $this->hasOne(category::class,'id', 'category_id');
    }
}

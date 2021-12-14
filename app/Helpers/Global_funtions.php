<?php

use App\Models\User;

use Illuminate\Support\Facades\Config;


if ( ! function_exists('readable_time')){
    function readable_time($time)
    {
        $time=\Carbon\Carbon::parse($time)->diffForhumans();
        return $time;
    }
}
if ( ! function_exists('get_user')){
    function get_user($id)
    {
        $user=User::find($id);
        return $user;
    }
}
if ( ! function_exists('getIDBy_Email')){
    function getIDBy_Email($email)
    {
        $user=User::where('email',$email)->first();
        return $user->id;
    }
}
//if ( ! function_exists('is_online')){
//    function is_online($id)
//    {
//        $start  =new \Carbon\Carbon(get_user($id)->last_seen);
//        $end    =\Carbon\Carbon::now();
//      if($end->diffInMinutes($start)>2)
//      {
//          return false;
//      }
//      else
//      {
//          return true;
//      }
//
//    }
//}

if ( ! function_exists('get_ENV')){
    function get_ENV($name)
    {

return Config::get('myconfig.'.$name);


    }
}

//if ( ! function_exists('settings')){
//    function settings()
//    {
//   if(!setting::where('user_id',auth()->user()->id)->exists())
//   {
//
//       $s=new setting();
//       $s->user_id=auth()->user()->id;
//       $s->save();
//   }
//        $val=setting::where('user_id',auth()->user()->id)->first();
//
//        return $val;
//    }
//}





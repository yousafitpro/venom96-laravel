<?php

use App\Models\gateway;

if ( ! function_exists('gateways')){
    function gateways()
    {
        $gateways=gateway::all();
        return $gateways;
    }
}
if ( ! function_exists('active_slides')){
    function active_slides()
    {
        $items=\App\Models\slider::where('is_active','1')->get();
        return $items;
    }
}
if ( ! function_exists('pc_games')){
    function pc_games()
    {
        $items=\App\Models\category::where(['type'=>'PC Game'])->get();
        return $items;
    }
}
if ( ! function_exists('mobile_games')){
    function mobile_games()
    {
        $items=\App\Models\category::where(['type'=>'Mobile Game'])->get();
        return $items;
    }
}
if ( ! function_exists('new_items')){
    function new_items()
    {
        $gateways=gateway::all();
        return $gateways;
    }
}
if ( ! function_exists('new_games')){
    function new_games()
    {

        $items=\App\Models\category::where(['is_new'=>'1'])->get();
        return $items;
    }
}

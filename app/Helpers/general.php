<?php

use App\Models\gateway;

if ( ! function_exists('gateways')){
    function gateways()
    {
        $gateways=gateway::all();
        return $gateways;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\gateway;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    public function updatePaypal(Request $request)
    {
        $g=gateway::where('id','1')->first();
        $g->email=$request->email;
        $g->status=$request->status;
        $g->save();
        return redirect()->back();
    }
    public function updateStripe(Request $request)
    {
        $g=gateway::where('id','2')->first();
        $g->private_key=$request->private_key;
        $g->public_key=$request->public_key;
        $g->status=$request->status;
        $g->save();
        return redirect()->back();
    }
    public function gatewaySettings()
    {

        return view('settings.gateways');
    }
}

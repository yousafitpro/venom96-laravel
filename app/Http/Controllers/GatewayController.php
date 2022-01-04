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
    public function updateKhalti(Request $request)
    {
        $g=gateway::where('id','3')->first();
        $g->public_key=$request->public_key;
        $g->status=$request->status;
        $g->save();
        return redirect()->back();

    }
    public function updateprobhu(Request $request)
    {
        $g=gateway::where('id','1')->first();
        $g->merchantId=$request->merchantid ;
        $g->password=$request->password ;
        $g->returnUrl =$request->returnurl;
        $g->status=$request->status;
        $g->save();
        return redirect()->back();
    }
    public function KhaltiReturnURL(Request $request)
    {

    }
    public function ProbhuReturnURL(Request $request)
    {

    }
    public function YoappReturnURL(Request $request)
    {

    }

    public function updateyoapp(Request $request)
    {
        $g=gateway::where('id','2')->first();
        $g->merchantusername=$request->merchantusername;
        $g->merchantId=$request->merchantid ;
        $g->merchantApiusername=$request->merchantapiusername ;
        $g->returnUrl =$request->returnurl;
        $g->merchantname=$request->merchantname;
        $g->save();
        return redirect()->back();
    }
    public function gatewaySettings()
    {

        return view('settings.gateways');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\bid;
use Carbon\Carbon;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mailgun\Exception;

class BidController extends Controller
{
   public function create(Request $request)
   {
       $bodyContent =$request->all();

       $value=0;


       try {
           $curl = curl_init();
           curl_setopt_array($curl, array(
               CURLOPT_URL => 'https://service.blackbookcloud.com/UsedCarWS/UsedCarWS/UsedVehicle/VIN/'.$bodyContent['vehicle']['vin'].'?mileage=15000&state=tx&template=11&customerid=test',
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_ENCODING => '',
               CURLOPT_MAXREDIRS => 10,
               CURLOPT_TIMEOUT => 0,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
               CURLOPT_CUSTOMREQUEST => 'GET',
               CURLOPT_HTTPHEADER => array(
                   'Authorization: Basic '.Config::get('myconfig.myapi.blackbookcloud_key')
               ),
           ));

           $response = curl_exec($curl);
           curl_close($curl);
           $response=json_decode($response);
           $value=$response->used_vehicles->used_vehicle_list[0]->adjusted_whole_avg;
       } catch (Exception $e)
       {

       }

if($value>0 && $bodyContent['vehicle']['condition']['wheels_removed']=='yes')
{
    $cut=($value/100)*15;
    $value=$value-$cut;
}

if (bid::where('instant_offer_id',$bodyContent['instant_offer_id'])->exists())
{
    return  response()->json(['message'=>"You already placed a bid on this Offer"]);
}

   $b=new bid();
       $b->user_id=auth('api')->user()->id;
   $b->instant_offer_id=$bodyContent['instant_offer_id'];
   $b->request_id=$bodyContent['request_id'];
   $b->year=$bodyContent['vehicle']['year'];
   $b->make=$bodyContent['vehicle']['make'];
   $b->model=$bodyContent['vehicle']['model'];
   $b->trim=$bodyContent['vehicle']['trim'];
   $b->vin=$bodyContent['vehicle']['vin'];
   $b->body_type=$bodyContent['vehicle']['body_type'];
   $b->door_count=$bodyContent['vehicle']['door_count'];
   $b->fuel_type=$bodyContent['vehicle']['fuel_type'];
   $b->body_style=$bodyContent['vehicle']['body_style'];
   $b->adjusted_curb_weight=$bodyContent['vehicle']['adjusted_curb_weight'];
   $b->color=$bodyContent['vehicle']['color'];
   $b->usage=$bodyContent['vehicle']['usage'];
   $b->squish_vin=$bodyContent['vehicle']['squish_vin'];
   $b->category=$bodyContent['vehicle']['category'];
   $b->weight_category=$bodyContent['vehicle']['weight_category'];
   $b->location_zip_code=$bodyContent['vehicle']['location']['zip_code'];
   $b->location_city=$bodyContent['vehicle']['location']['city'];
   $b->location_county=$bodyContent['vehicle']['location']['county'];
   $b->location_state_code=$bodyContent['vehicle']['location']['state_code'];
   $b->condition_all_tires_inflated=$bodyContent['vehicle']['condition']['all_tires_inflated'];
   $b->condition_driver_front=$bodyContent['vehicle']['condition']['flat_tires_location']['driver_front'];
   $b->condition_passenger_front=$bodyContent['vehicle']['condition']['flat_tires_location']['passenger_front'];
   $b->condition_driver_rear=$bodyContent['vehicle']['condition']['flat_tires_location']['driver_rear'];
   $b->condition_passenger_rear=$bodyContent['vehicle']['condition']['flat_tires_location']['passenger_rear'];
   $b->wheels_removed=$bodyContent['vehicle']['condition']['wheels_removed'];
   $b->wheels_removed_location_driver_front=$bodyContent['vehicle']['condition']['wheels_removed_location']['driver_front'];
   $b->wheels_removed_location_passenger_front=$bodyContent['vehicle']['condition']['wheels_removed_location']['passenger_front'];
   $b->wheels_removed_location_driver_rear=$bodyContent['vehicle']['condition']['wheels_removed_location']['passenger_front'];
   $b->wheels_removed_location_driver_rear=$bodyContent['vehicle']['condition']['wheels_removed_location']['driver_rear'];
   $b->wheels_removed_location_passenger_rear=$bodyContent['vehicle']['condition']['wheels_removed_location']['passenger_rear'];
   $b->drivetrain_condition=$bodyContent['vehicle']['condition']['drivetrain_condition'];
   $b->engine_transmission_condition=$bodyContent['vehicle']['condition']['engine_transmission_condition'];
   $b->interior_intact=$bodyContent['vehicle']['condition']['interior_intact'];
   $b->flood_fire_damage_free=$bodyContent['vehicle']['condition']['flood_fire_damage_free'];
   $b->mileage=$bodyContent['vehicle']['condition']['mileage'];
   $b->ownership_title_type=$bodyContent['vehicle']['ownership']['title_type'];
//   $b->body_damage_free=$bodyContent['vehicle']['condition']['body_damage_free'][''];
//   $b->body_damage_location_driver_front=$bodyContent['vehicle']['body_damage_location']['driver_front'];
   $b->body_damage_free=$bodyContent['vehicle']['condition']['body_damage_free'];
   $b->body_damage_location_driver_front=$bodyContent['vehicle']['condition']['body_damage_location']['driver_front'];
   $b->body_damage_location_passenger_front=$bodyContent['vehicle']['condition']['body_damage_location']['passenger_front'];
   $b->body_damage_location_driver_rear=$bodyContent['vehicle']['condition']['body_damage_location']['driver_rear'];
   $b->body_damage_location_passenger_rear=$bodyContent['vehicle']['condition']['body_damage_location']['passenger_rear'];
   $b->mirrors_lights_glass_intact=$bodyContent['vehicle']['condition']['body_panels_intact'];
   $b->mirrors_lights_glass_damage_location_passenger_front=$bodyContent['vehicle']['condition']['mirrors_lights_glass_damage_location']['passenger_front'];
   $b->mirrors_lights_glass_damage_location_driver_front=$bodyContent['vehicle']['condition']['mirrors_lights_glass_damage_location']['driver_front'];
   $b->mirrors_lights_glass_damage_location_driver_rear=$bodyContent['vehicle']['condition']['mirrors_lights_glass_damage_location']['driver_rear'];
   $b->mirrors_lights_glass_damage_location_passenger_rear=$bodyContent['vehicle']['condition']['mirrors_lights_glass_damage_location']['passenger_rear'];

$b->bid_amount=$value;
       $b->status="Pending";
if($bodyContent['vehicle']['year']>"2012")
{
    $b->status="Approved";
}
   $b->save();
   $now=Carbon::now();
return response()->json(['bid_id'=>$b->id,'bid_amount'=>$value,'bid_valid_until'=>$now->addDays(7),'status'=>$b->status]);
   }
   public function track($id)
   {
       $bid=bid::where('id',$id)->where('user_id',auth()->user('api')->id)->first();

       return response()->json([$bid]);
   }

   public function getALL()
   {
       $list=bid::all();
       return view('bid.list')->with(['list'=>$list]);
   }
    public function approve($id)
    {
        $item=bid::find($id);
        $item->status="Approved";
        $item->save();
        return redirect()->back();
    }
    public function decline($id)
    {
        $item=bid::find($id);
        $item->status="Declined";
        $item->save();
        return redirect()->back();
    }
    public function detail($id)
    {
        $item=bid::find($id);
        return view('bid.detail')->with(['item'=>$item]);
    }
}

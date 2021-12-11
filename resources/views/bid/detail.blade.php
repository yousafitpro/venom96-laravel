@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('bid.getAll')}}"><button class="btn btn-outline-dark">Go Back</button></a>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      <h3>General Info</h3>
                      <hr>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md-3">
                               <label style="font-size: 15px; font-weight: bold">Year</label><br>
                                  <small style=" font-size: 15px">{{$item->year}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Make</label><br>
                                  <small style=" font-size: 15px">{{$item->make}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Model</label><br>
                                  <small style=" font-size: 15px">{{$item->model}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Trim</label><br>
                                  <small style=" font-size: 15px">{{$item->trim}}</small>
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">VIN</label><br>
                                  <small style=" font-size: 15px">{{$item->vin}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Body Type</label><br>
                                  <small style=" font-size: 15px">{{$item->body_type}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Door Count</label><br>
                                  <small style=" font-size: 15px">{{$item->door_count}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">Fue Type</label><br>
                                  <small style=" font-size: 15px">{{$item->fuel_type}}</small>
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-3">
{{--                                  <label style="font-size: 15px; font-weight: bold">VIN</label>--}}
{{--                                  <small style=" font-size: 15px">{{$item->vin}}</small>--}}
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">body style</label><br>
                                  <small style=" font-size: 15px">{{$item->body_style}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">adjusted curb weight</label><br>
                                  <small style=" font-size: 15px">{{$item->adjusted_curb_weight}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">color</label><br>
                                  <small style=" font-size: 15px">{{$item->color}}</small>
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">weight category</label><br>
                                  <small style=" font-size: 15px">{{$item->weight_category}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">usage</label><br>
                                  <small style=" font-size: 15px">{{$item->usage}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">squish vin</label><br>
                                  <small style=" font-size: 15px">{{$item->squish_vin}}</small>
                              </div>
                              <div class="col-md-3">
                                  <label style="font-size: 15px; font-weight: bold">category</label><br>
                                  <small style=" font-size: 15px">{{$item->category}}</small>
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Location</h3>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">Zip code</label><br>
                                    <small style=" font-size: 15px">{{$item->location_zip_code}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">City</label><br>
                                    <small style=" font-size: 15px">{{$item->location_city}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">Country</label><br>
                                    <small style=" font-size: 15px">{{$item->location_country}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">State Code</label><br>
                                    <small style=" font-size: 15px">{{$item->location_state_code}}</small>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Ccondition</h3>
                        <hr>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">all tires inflated</label><br>
                                    <small style=" font-size: 15px">{{$item->all_tires_inflated}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">wheels removed</label><br>
                                    <small style=" font-size: 15px">{{$item->wheels_removed}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">drivetrain condition</label><br>
                                    <small style=" font-size: 15px">{{$item->drivetrain_condition}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">engine transmission condition</label><br>
                                    <small style=" font-size: 15px">{{$item->engine_transmission_condition}}</small>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">body damage free</label><br>
                                    <small style=" font-size: 15px">{{$item->body_damage_free}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">body panels intact</label><br>
                                    <small style=" font-size: 15px">{{$item->body_panels_intact}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">drivetrain condition</label><br>
                                    <small style=" font-size: 15px">{{$item->drivetrain_condition}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">mirrors lights glass intact </label><br>
                                    <small style=" font-size: 15px">{{$item->mirrors_lights_glass_intact}}</small>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">body damage free</label><br>
                                    <small style=" font-size: 15px">{{$item->body_damage_free}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">body panels intact</label><br>
                                    <small style=" font-size: 15px">{{$item->body_panels_intact}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">interior intact</label><br>
                                    <small style=" font-size: 15px">{{$item->interior_intact}}</small>
                                </div>
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">flood fire damage free </label><br>
                                    <small style=" font-size: 15px">{{$item->flood_fire_damage_free}}</small>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label style="font-size: 15px; font-weight: bold">mileage</label>
                                    <small style=" font-size: 15px">{{$item->mileage}}</small>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">

                                </div>

                            </div>
                            <br>

<br>
                            <div class="row">
                                <div class="col-md-3">
                                 <div style="padding: 10px" class="card">
                                     <label style="font-size: 15px; font-weight: bold">flat tires location</label><br>

                                     <label style="font-size: 12px; font-weight: bold">driver front</label>
                                     <small style=" font-size: 15px">{{$item->condition_driver_front?"true":"false"}}</small>
                                     <br>
                                     <label style="font-size: 12px; font-weight: bold">passenger front</label>
                                     <small style=" font-size: 15px">{{$item->condition_passenger_front?"true":"false"}}</small>
                                     <br>
                                     <label style="font-size: 12px; font-weight: bold">driver rear</label>
                                     <small style=" font-size: 15px">{{$item->condition_driver_rear?"true":"false"}}</small>
                                     <br>
                                     <label style="font-size: 12px; font-weight: bold">passenger rear</label>
                                     <small style=" font-size: 15px">{{$item->condition_passenger_rear?"true":"false"}}</small>
                                 </div>
                                </div>
                                <div class="col-md-3">
                                    <div style="padding: 10px" class="card">
                                        <label style="font-size: 15px; font-weight: bold">wheels removed location</label><br>

                                        <label style="font-size: 12px; font-weight: bold">driver front</label>
                                        <small style=" font-size: 15px">{{$item->wheels_removed_location_driver_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger front</label>
                                        <small style=" font-size: 15px">{{$item->wheels_removed_location_passenger_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">driver rear</label>
                                        <small style=" font-size: 15px">{{$item->wheels_removed_location_driver_rear?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger rear</label>
                                        <small style=" font-size: 15px">{{$item->wheels_removed_location_passenger_rear?"true":"false"}}</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div style="padding: 10px" class="card">
                                        <label style="font-size: 15px; font-weight: bold">body damage location</label><br>

                                        <label style="font-size: 12px; font-weight: bold">driver front</label>
                                        <small style=" font-size: 15px">{{$item->body_damage_location_driver_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger front</label>
                                        <small style=" font-size: 15px">{{$item->body_damage_location_passenger_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">driver rear</label>
                                        <small style=" font-size: 15px">{{$item->body_damage_location_driver_rear?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger rear</label>
                                        <small style=" font-size: 15px">{{$item->body_damage_location_passenger_rear?"true":"false"}}</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div style="padding: 10px" class="card">
                                        <label style="font-size: 15px; font-weight: bold">body panels damage location</label><br>

                                        <label style="font-size: 12px; font-weight: bold">driver front</label>
                                        <small style=" font-size: 15px">{{$item->body_panels_damage_location_driver_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger front</label>
                                        <small style=" font-size: 15px">{{$item->body_panels_damage_location_passenger_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">driver rear</label>
                                        <small style=" font-size: 15px">{{$item->body_panels_damage_location_driver_rear?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger rear</label>
                                        <small style=" font-size: 15px">{{$item->body_panels_damage_location_passenger_rear?"true":"false"}}</small>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div style="padding: 10px" class="card">
                                        <label style="font-size: 15px; font-weight: bold">mirrors lights glass damage location</label><br>

                                        <label style="font-size: 12px; font-weight: bold">driver front</label>
                                        <small style=" font-size: 15px">{{$item->mirrors_lights_glass_damage_location_driver_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger front</label>
                                        <small style=" font-size: 15px">{{$item->mirrors_lights_glass_damage_location_passenger_front?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">driver rear</label>
                                        <small style=" font-size: 15px">{{$item->mirrors_lights_glass_damage_location_driver_rear?"true":"false"}}</small>
                                        <br>
                                        <label style="font-size: 12px; font-weight: bold">passenger rear</label>
                                        <small style=" font-size: 15px">{{$item->mirrors_lights_glass_damage_location_passenger_rear?"true":"false"}}</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div style="padding: 10px" class="card">
                                        <label style="font-size: 15px; font-weight: bold">ownership</label><br>

                                        <label style="font-size: 12px; font-weight: bold">title_type</label>
                                        <small style=" font-size: 15px">{{$item->ownership_title_type}}</small>

                                    </div>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                         </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

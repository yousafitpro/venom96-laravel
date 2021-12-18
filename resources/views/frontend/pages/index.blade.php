@extends('layouts.frontend')
@section('content')

    <div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-12">
 @include("frontend.inc.topslider")
        </div>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="col-md-12">


                            <div class="myitemcontainer">
                                <div class="item" style="margin-left: 0px">
                                    <div   class="gameCard" >
                                        <div>
                                            <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                                        </div>
                                        <br>
                                        <div style="text-align: center">
                                            <label style="font-size: 10px; font-weight: bold">Mobile Legends: Bang Bang</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div   class="gameCard" >
                                        <div>
                                            <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                                        </div>
                                        <br>
                                        <div style="text-align: center">
                                            <label style="font-size: 10px; font-weight: bold">Mobile Legends: Bang Bang</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div   class="gameCard" >
                                        <div>
                                            <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                                        </div>
                                        <br>
                                        <div style="text-align: center">
                                            <label style="font-size: 10px; font-weight: bold">Mobile Legends: Bang Bang</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div   class="gameCard" >
                                        <div>
                                            <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                                        </div>
                                        <br>
                                        <div style="text-align: center">
                                            <label style="font-size: 10px; font-weight: bold">Mobile Legends: Bang Bang</label>
                                        </div>
                                    </div>
                                </div>

                            </div>


        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-2 hideOnMob"  >
                        <div>
                            <div>
                                <img style="height: 100%; width: 100%" src="{{asset('myimages/pcgames.png')}}">
                            </div>
                            <div>
                                <label style="font-size: 20px; text-align: center">Popular Mobile Games o</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div >
                            <div>
                                <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                            </div>
                            <br>
                            <div style="text-align: center">
                                <label class="gamecatcardtitle">Mobile Legends: Bang Bang</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <div>
                                <img class="gamecatcardimage" style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                            </div>
                            <br>
                            <div style="text-align: center">
                                <label class="gamecatcardtitle">Free Fire</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <div>
                                <img class="gamecatcardimage"  style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                            </div>
                            <br>
                            <div style="text-align: center">
                                <label class="gamecatcardtitle">Be The King: Judge Destiny</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <div>
                                <img class="gamecatcardimage"  style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                            </div>
                            <br>
                            <div style="text-align: center">
                                <label class="gamecatcardtitle">PUBG Mobile</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <div>
                                <img class="gamecatcardimage"  style="height: 100%; width: 100%" src="{{asset('myimages/gt.png')}}">
                            </div>
                            <br>
                            <div style="text-align: center">
                                <label class="gamecatcardtitle">Honkai Impact 3</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

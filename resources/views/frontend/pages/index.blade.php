@extends('layouts.frontend')
@section('content')

    <div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
 @include("frontend.inc.topslider")
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <label class="hideOnPC">Popular Mobile Games</label>

                            <div class="myitemcontainer" >
                                <div class="hideOnMob">
                                    @include('frontend.inc.game',['imageurl'=>asset('myimages/mbgames.png'),'title'=>'Popular Mobile Games','isfirst'=>true])

                                </div>
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123','next'=>'nextItem'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                            </div>


        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-md-12">
                <label class="hideOnPC">Popular PC Games</label>

                <div class="myitemcontainer" >
                    <div class="hideOnMob">
                        @include('frontend.inc.game',['imageurl'=>asset('myimages/pcgames.png'),'title'=>'Popular PC Games','isfirst'=>true])

                    </div>
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123','next'=>'nextItem'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                </div>


            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label style="font-weight: bold; color: gray; " >New Games</label>

                <div class="myitemcontainer" >

                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123','next'=>'nextItem','styles'=>'margin-left:10px;'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])

                </div>


            </div>
        </div>
        <hr>
        <label style="font-weight: bold; color: gray; " >New Items</label><br>
        <div class="row">


            <div class="col-md-2">
                <div style="width: 100%; " class="myflex">
                    <img class="gamecatcardimage" src="{{asset('myimages/gt.png')}}">

                </div>
                <div style="width: 100%">
                    <p style="text-align: center">Pubg 123</p>
                </div>
            </div>

        </div>

</div>

@endsection

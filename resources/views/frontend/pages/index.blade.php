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

                            </div>


        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-md-12">
                <label class="hideOnPC">Popular PC Games</label>

                <div class="myitemcontainer">

                </div>


            </div>
        </div>
        <hr>

</div>

@endsection

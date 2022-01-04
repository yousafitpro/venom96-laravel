@extends('layouts.frontend')
@section('content')

    <div class="hideOnMob">
        @include('frontend.categoryDetails.pctopbox')
    </div>
    <div class="hideOnPC">
        @include('frontend.categoryDetails.mbtopbax')
    </div>
    <div style="width: 100%">
        <br>
        <br>
<div class="container" style="padding: 10px">


    <div class="row">
<div class="col-md-6">
    <img src="{{asset('images/image1.png')}}" style="width: 100%; border-radius: 10px">
</div>
        <div class="col-md-6">
            <h4 >About Dragon Nest SEA</h4><br>
            <small style="color: gray">
                Dragon Nest SEA (DN SEA) is a free-to-play fantasy MMORPG developed by Eyedentity. Aside from boasting a non-targeting combat and skill system within instance dungeons, Dragon Nest also revolves around a rich story which is told in different points of view depending on the player's chosen class. Dragon Nest receives new content, balance patches and cash shop items on a monthly basis. Major expansions that include several new dungeons, Nests, new classes, multiple new features or remake of old ones, extensive class adjustments and a raise on the level cap take place every year.
                Buy Dragon Nest SEA Gold from our list of reputable sellers at KALEOZ.com. Easy and fast delivery with secure global payment methods.
            </small>
        </div>
    </div>
</div>
    </div>
@endsection

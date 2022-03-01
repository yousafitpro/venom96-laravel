@extends('layouts.myfrontend')
@section('content')

<div class="container">

        <div class="slider">
             @include("myfrontend.inc.slider")
        </div>

        <div class="homegames">
                <div class="inner">
                        <div class="mobile_games category">
                        <h3>
                                <img src="{{asset('myimages/mbgames.png')}}" alt="">
                                <span>Popular Mobile Games</span>
                        </h3>
                        <ul class="list">
                                <li>
                                        @include("myfrontend.inc.gamecard")
                                </li>
                                <li>
                                        @include("myfrontend.inc.gamecard")
                                </li>
                                <li>
                                        @include("myfrontend.inc.gamecard")
                                </li>
                                <li>
                                        @include("myfrontend.inc.gamecard")
                                </li>
                                <li>
                                        @include("myfrontend.inc.gamecard")
                                </li>
                        </ul>
                        </div>
                        <div class="pc_games category">
                        <h3>
                                <img src="{{asset('myimages/pcgames.png')}}" alt="">
                                <span>Popular PC Games</span>
                        </h3>
                        <ul class="list">
                        <li>
                                @include("myfrontend.inc.gamecard")
                        </li>
                        <li>
                                @include("myfrontend.inc.gamecard")
                        </li>
                        <li>
                                @include("myfrontend.inc.gamecard")
                        </li>
                        <li>
                                @include("myfrontend.inc.gamecard")
                        </li>
                        <li>
                                @include("myfrontend.inc.gamecard")
                        </li>
                        </ul>
                        </div>
                </div>
        </div>

        <div class="new_games">
               <div class="inner">
                       <div class="new_games">
                                <h3><span>New Games</span></h3>
                                <ul class="list">
                                        <li>
                                                @include("myfrontend.inc.gamecard")
                                        </li>
                                        <li>
                                                @include("myfrontend.inc.gamecard")
                                        </li>
                                        <li>
                                                @include("myfrontend.inc.gamecard")
                                        </li>
                                        <li>
                                                @include("myfrontend.inc.gamecard")
                                        </li>
                                        <li>
                                                @include("myfrontend.inc.gamecard")
                                        </li>
                                </ul>
                        </div>
                </div>
        </div>

        <div class="new_items">
                <h3>New Items</h3>
                <ul>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>

                </ul>
        </div>

        <div class="hot_items">
                <h3>Hot Items</h3>
                <ul>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>
                        <li>
                        @include("myfrontend.inc.itemcard")
                        </li>

                </ul>
        </div>

        <div class="features">
                <div class="row">
                        <div class="inner">
                                <div class="home_features">
                                <ul>
                                        <li>
                                                <div>
                                                       <i class="fa icon fa-2x fa-search pb-3" aria-hidden="true"></i>
                                                        <div class="f_content"> 
                                                          <h3>Find the Relevant Items</h3>
                                                           <p>KALEOZ search and filters enable fast and accurate search.</p>
                                                        </div>
                                                        
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                        <i class="fa icon fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                        <div class="f_content">
                                                                <h3>Safe & Secure</h3>
                                                                <p>No scam. No need others to vouch. No fraud and chargebacks. KALEOZ makes sure buyers gets the items purchased and seller gets his payments.</p>
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                        <i class="fa icon fa-2x fa-university pb-3" aria-hidden="true"></i>
                                                        <div class="f_content">
                                                                <h3>Low fees & Attractive rewards</h3>
                                                                <p>KALEOZ search and filters enable fast and accurate search.</p>
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                        <i class="fa icon fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                        <div class="f_content">
                                                                <h3>24×7 Support</h3>
                                                                <p>KALEOZ search and filters enable fast and accurate search.</p>
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                        <i class="fa icon fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                        <div class="f_content">
                                                                <h3>Buy at Lower Price</h3>
                                                                <p>KALEOZ search and filters enable fast and accurate search.</p>
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                        <i class="icon fa fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                        <div class="f_content">
                                                                <h3>Earn Real Cash</h3>
                                                                <p>KALEOZ search and filters enable fast and accurate search.</p>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                                </div>
                                <div class="home_guide">
                                <ul>
                                        <li>
                                                <div>
                                                     <i class="icon fa fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                    <div class="f_content">
                                                        <a href="">
                                                                <h3>How To Buy</h3>
                                                                <p>Find out the buying guide here.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                     <i class="icon fa fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                    <div class="f_content">
                                                        <a href="">
                                                                <h3>How To Sell</h3>
                                                                <p>Find out the buying guide here.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div>
                                                     <i class="icon fa fa-2x fa-shield pb-3" aria-hidden="true"></i>
                                                    <div class="f_content">
                                                        <a href="">
                                                                <h3>Beginner's Guide</h3>
                                                                <p>Find out the buying guide here.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                        </li>
                                </ul>
                                </div>
                        </div>
                </div>
        </div>
</div>
<script src="{{asset('frontend/js/home.js')}}"></script>
@endsection

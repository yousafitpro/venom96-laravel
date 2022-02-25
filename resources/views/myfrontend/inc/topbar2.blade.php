<!-- 
<div class="main_nav">
    <div class="inner">
        <div class="header_logo">
                <a href="https://www.kaleoz.com/">
                    <svg id="KALEOZ-LOGO" viewBox="0,0 96,20" width="96" height="20">
                    <path id="KALEOZ-LOGO-TEXT" fill="dodgerblue" d="M40.103,15.238V0.952h-4.801V15.97l1.24,3.077h10.28l-1.68-3.809H40.103z M26.892,0.953h-5.223l-6.015,16.077L9.489,9.469l7.315-8.517h-6.271L4.814,8.19V0.952H0.018v18.095h4.797V11.31l6.244,7.737h3.841h5.208l1.057-3.338h6.248l1.075,3.338h5.695L26.892,0.953L26.892,0.953z M22.451,12.386l1.818-5.239l1.847,5.241L22.451,12.386z M95.982,0.952H78.986l2.967,3.81h6.213l-8.877,14.285h15.779v-3.809h-7.699L95.982,0.952z M52.574,15.25v-3.346h5.523V8.104h-5.523V4.762h7.014l-1.535-3.81h-10.27v14.762l1.344,3.333h12.414l-2.475-3.797H52.574zM70.586,0c-5.568,0-10.082,4.478-10.082,9.999C60.504,15.521,65.018,20,70.586,20c5.566,0,10.082-4.479,10.082-10.001C80.668,4.478,76.152,0,70.586,0z M70.586,15.952c-3.314,0-6.002-2.663-6.002-5.952c0-3.288,2.688-5.953,6.002-5.953c3.312,0,6,2.665,6,5.953C76.586,13.289,73.898,15.952,70.586,15.952z"></path>
                    <path id="KALEOZ-LOGO-PACMAN" fill="orange" transform="translate(60.5 0)" d="M10.057,10.002l2.85-2.098c-0.615-0.754-1.555-1.237-2.609-1.237c-1.855,0-3.361,1.493-3.361,3.333	s1.506,3.334,3.361,3.334c1.148,0,2.162-0.573,2.768-1.446L10.057,10.002z"></path>
                    </svg>
                </a>
                <div class="header_search">
                    <form name="form" method="get" action="https://www.kaleoz.com/search">
                        <label class="cpt-search" id="universal_search">
                        <input type="search" name="keyword" value="" placeholder="Search for game or item" maxlength="72">
                        <label class="btw" color="transparent"><span icon-only="search"></span><input type="submit"></label>
                        </label>
                    </form>
                </div>
        </div>
    </div>
</div> -->

















<div class="maintop2"  >
    <div style="width: 100%" >
        <div style="width: 10%; float: left" class="myflex">

            <img class="top2-logo"  src="{{asset('myimages/topbarlogo.png')}}">
            <img class="top2-toggle" onclick="toggleSidebar()" src="{{asset('myimages/toggle.png')}}">
        </div>
        <div style="width: 80%; float: left;" class=" topbarInputBox">
            <div class="topbarInput">
         <input placeholder="search for game or item" >
                <i class="fas fa-search" style="float: right; zoom: 1.2; margin-top: 5px; margin-right: 5px; color: grey"></i>
            </div>
        </div>
        <div style="width: 10%;  float: left" class="top2-plususer">
            <img  src="{{asset('myimages/userplus.png')}}">
        </div>
        <div style="width: 10%;  float: left;" class="myflex top2-signuplogin">

            <?php
            $baseUrl="https://sneakcrm.com/venom96-laravel/";
            ?>
@if(!auth()->check())
                    <img  src="{{asset('myimages/userplus.png')}}">
                <span style="color:gray; font-weight:bold; text-align: right">
                 <a  href="{{$baseUrl}}login" class=" " style="float: right; color: gray">Login/</a>
</span>
                <span style="color:gray; font-weight:bold; text-align: right">
                 <a  href="{{$baseUrl}}register" class=" " style="float: right; color: gray">Signup</a>
             </span>
                @else



                    <span style="color:gray; font-weight:bold; text-align: right">
                 <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" " style="float: right; color: gray">Logout</a>
             </span>

    @endif


        </div>
    </div>

</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form> 

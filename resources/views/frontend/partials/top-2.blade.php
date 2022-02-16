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


<link rel="stylesheet" href="{{asset('movie-slider/style.css')}}">
<div >
    <div class="slideshow-container">
@foreach(active_slides() as $slide)
        <div class="mySlides ">
{{--            <div class="numbertext">1 / 3</div>--}}
            <img class="slideimage" src="{{$slide->image_url}}" style="width:100%">
{{--            <div class="text">{{$slide->title}}</div>--}}
        </div>
        @endforeach



    </div>


    <div style="text-align:center">
        @foreach(active_slides() as $slide)
        <span class="dot"></span>
        @endforeach
    </div>


</div>
<script  src="{{asset('movie-slider/script.js')}}"></script>

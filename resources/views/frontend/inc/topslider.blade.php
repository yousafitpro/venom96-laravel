
<link rel="stylesheet" href="{{asset('movie-slider/style.css')}}">
<div >
    <div class="slideshow-container">

        <div class="mySlides ">
            <div class="numbertext">1 / 3</div>
            <img class="slideimage" src="{{asset('myimages/sliderimg.png')}}" style="width:100%">
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">2 / 3</div>
            <img class="slideimage" src="{{asset('myimages/sliderimg2.png')}}" style="width:100%">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides ">
            <div class="numbertext">3 / 3</div>
            <img class="slideimage" src="{{asset('myimages/sliderimg3.png')}}" style="width:100%">
            <div class="text">Caption Three</div>
        </div>

    </div>


    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>


</div>
<script  src="{{asset('movie-slider/script.js')}}"></script>

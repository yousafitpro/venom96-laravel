<a href="product/{{$user}}">

    <div class="item3" >
        <div style="width: 100%;">
            <div style=" " class="myflex ">
                <img class="gameItemcardimage" src="{{isset($imageurl)?$imageurl:''}}">

            </div>
            <br>
            <div style="width: 100%; text-align: center">
                <a href="#">{{isset($title)?$title:''}}

                </a><br>
                <label style="color: black; font-size: 13px">{{$price}}</label><br>
{{--                <label>{{$user}}</label>--}}
            </div>
        </div>

    </div>
</a>
{{--//asas--}}

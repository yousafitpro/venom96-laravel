<div class="{{isset($next)?$next:'item'}}" style="{{isset($styles)?$styles:''}}" >
    <div   class="gameCard" style="{{isset($isfirst)?'margin-left:0px':''}}"  >
        <div>
            <img class="gamecatcardimage" style=" width: 100%; {{isset($isfirst)?'height:100px':''}}  " src="{{$imageurl}}">
        </div>
        <br>
        <div style="text-align: center">
            <label style="{{isset($isfirst)?'font-size: 15px;':'font-size: 10px'}}  font-weight: bold; color: gray; {{isset($isfirst)?'width:150px; margin-left:-20px':''}}">{{$title}}</label>
        </div>
    </div>
</div>

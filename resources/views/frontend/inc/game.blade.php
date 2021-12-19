<div class="{{isset($next)?$next:'item'}}" style="" >
    <div   class="gameCard" style="{{isset($isfirst)?'margin-left:0px':''}}"  >
        <div>
            <img class="gamecatcardimage" style=" width: 100%;  " src="{{$imageurl}}">
        </div>
        <br>
        <div style="text-align: center">
            <label style="{{isset($isfirst)?'font-size: 15px;':'font-size: 10px'}}  font-weight: bold; color: gray">{{$title}}</label>
        </div>
    </div>
</div>

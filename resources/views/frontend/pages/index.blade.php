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
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                                @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                            </div>


        </div>
    </div>
    <hr>
        <div class="row">
            <div class="col-md-12">
                <label class="hideOnPC">Popular PC Games</label>

                <div class="myitemcontainer" >
                    <div class="hideOnMob">
                        @include('frontend.inc.game',['imageurl'=>asset('myimages/pcgames.png'),'title'=>'Popular PC Games','isfirst'=>true])

                    </div>
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123','next'=>'nextItem'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])   @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                </div>


            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label style="font-weight: bold; color: gray; " >New Games</label>

                <div class="myitemcontainer" >

                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123','next'=>'nextItem','styles'=>'margin-left:10px;'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])
                    @include('frontend.inc.game',['imageurl'=>asset('myimages/gt.png'),'title'=>'Pubg 123'])

                </div>


            </div>
        </div>

        <label style="font-weight: bold; color: gray; " >New Items</label><br>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                  <div class="myitemGamecontainer">
                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])

                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])

                      @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])


              </div>
          </div>
      </div>
  </div>

</div>
        <br>
        <label style="font-weight: bold; color: gray; " >Hot Items</label><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="myitemGamecontainer">
                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])

                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])
                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])

                            @include('frontend.inc.gameitem',['imageurl'=>asset('myimages/gt.png'),'title'=>"mpact 3 fast and cheap Only",'price'=>'US$16.95/500m Alz','user'=>'TopUpMaster'])


                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection

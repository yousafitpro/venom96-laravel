@extends('layouts.frontend')
@section('content')

    <div class="container-fluid" style="margin: 0px; padding: 0px; width: 100%; overflow: hidden">
    <br>
    <div class="row">
        <div class="col-md-12">
 @include("frontend.inc.topslider")
        </div>
    </div>
 <div class="container">
     <hr>

     <div class="row">
         <div class="col-md-12">
             <label class="hideOnPC">Popular Mobile Games</label>

             <div class="myitemcontainer" >
                 <div class="hideOnMob">
                     @include('frontend.inc.game',['imageurl'=>asset('myimages/mbgames.png'),'title'=>'Popular Mobile Games','isfirst'=>true,'id'=>'21s'])

                 </div>
               <?php

                 $mbgames=mobile_games();
                 $pcgames=pc_games();
                 $newgames=new_games();

                 ?>
                 @if($mbgames->count()>0)
                 @include('frontend.inc.game',['imageurl'=>$mbgames[0]->image_url,'title'=>$mbgames[0]->name,'next'=>'nextItem','id'=>$mbgames[0]->id])
                @endif
               @foreach($mbgames as $mg)
                 @if($loop->index>0)
                 @include('frontend.inc.game',['imageurl'=>$mg->image_url,'title'=>$mg->name,'id'=>$mg->id])
                     @endif
                 @endforeach

             </div>


         </div>
     </div>
     <hr>
     <div class="row">
         <div class="col-md-12">
             <label class="hideOnPC">Popular PC Games</label>

             <div class="myitemcontainer" >
                 <div class="hideOnMob">
                     @include('frontend.inc.game',['imageurl'=>asset('myimages/pcgames.png'),'title'=>'Popular PC Games','isfirst'=>true,'id'=>$mg->id])

                 </div>
                 @if($pcgames->count()>0)
                 @include('frontend.inc.game',['imageurl'=>$pcgames[0]->image_url,'title'=>$pcgames[0]->name,'next'=>'nextItem','id'=>$mg->id])
                 @endif
                 @foreach($pcgames as $pg)
                     @if($loop->index>0)
                         @include('frontend.inc.game',['imageurl'=>$pg->image_url,'title'=>$pg->name,'id'=>$pg->id])
                     @endif
                 @endforeach
             </div>


         </div>
     </div>
     <hr>
     <div class="row">
         <div class="col-md-12">
             <label style="font-weight: bold; color: gray; " >New Games</label>

             <div class="myitemcontainer" >
                 @if($newgames->count()>0)
                 @include('frontend.inc.game',['imageurl'=>$newgames[0]->image_url,'title'=>$newgames[0]->name,'next'=>'nextItem','styles'=>'margin-left:10px;','id'=>$mg->id])
                @endif
                @foreach($newgames as $ng)
                     @if($loop->index>0)
                 @include('frontend.inc.game',['imageurl'=>$ng->image_url,'title'=>$ng->name,'id'=>$ng->id])
                      @endif
                 @endforeach
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
 </div>

@endsection

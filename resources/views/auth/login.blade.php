

    <!DOCTYPE html>
    <html>
    <head>
        <title>Page Title</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/mobileMediaQueries.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>

 <div class="hideOnMob">
     <div class="lscontainer"  >

         <div class="container-fluid">

             <div class="row">
                 <div class="col-md-6">
                     <img src="{{asset('images/leftlogo.png')}}">
                 </div>
                 <div class="col-md-6">

                 </div>
             </div>
             <br>
         </div>
         <div class="outerInner">
             <div class="container-fluid">

                 <div class="row">
                     @include('myauth.login.left')
                     @include('myauth.login.right')
                 </div>
             </div>
         </div>

     </div>
 </div>
 <div class="hideOnPC">
     <div class="lscontainer"  >

         <div class="container-fluid">

             <div class="row">
                 <div class="col-md-6">
                     <img src="{{asset('images/leftlogo.png')}}">
                 </div>
                 <div class="col-md-6">

                 </div>
             </div>
             <br>
         </div>
{{--         <form method="POST" id="myForm" action="{{ route('login') }}">--}}
{{--             @csrf--}}
         <div class="outerInner">
             <div class="container-fluid">

                 <div class="row">
                     @include('myauth.login.right')
                     @include('myauth.login.left')

                 </div>
             </div>
         </div>
{{--         </form>--}}

     </div>
 </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    </html>



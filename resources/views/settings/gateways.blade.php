@extends('layouts.dashboard')
@section("content")
    <?php
    $gateways=gateways();
    ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
         <div class="card">
             <div class="card-body">
                 <h3>1-{{$gateways[0]->title}}</h3><br>
                 <form action="{{route('gateway.updateprobhu')}}" method="post">
                     @csrf
                     <label>Merchant ID</label>
                     <br>
                     <input name="merchantid" required value="{{$gateways[0]->merchantId}}" placeholder="" class="form-control">

                    <br>
                     <label>Password</label>
                     <br>
                     <input name="password" required value="{{$gateways[0]->password}}" placeholder="" class="form-control">
                    <br>
                     <label>Return URL</label>
                     <br>
                     <input name="returnurl"  readonly value="{{$gateways[0]->returnUrl}}" placeholder="" class="form-control">

                     <br>
                     <label>Active:</label>
                     <select class="form-control" name="status">
                         @if($gateways[0]->status=='0')
                             <option value="0">No</option>
                         @endif
                         @if($gateways[0]->status=='1')
                             <option value="1">Yes</option>
                         @endif
                         <option value="1">Yes</option>
                         <option value="0">No</option>
                     </select>
                     <br>
                     <a href="#" style="cursor: pointer">   <button type="submit" class="btn btn-primary form-control">Save Changes</button></a>
                 </form>

             </div>
         </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <h3>2-{{$gateways[1]->title}}</h3><br>
                    <form action="{{route('gateway.updateyoapp')}}" method="post">
                        @csrf
                        <label>Merchant Username</label>
                        <br>
                        <input name="merchantusername" required value="{{$gateways[1]->merchantusername}}" placeholder="" class="form-control">

                        <br>
                        <label>Merchant Name</label>
                        <br>
                        <input name="merchantname" required value="{{$gateways[1]->merchantname}}" placeholder="" class="form-control">

                        <br>
                        <label>Merchant Api Username</label>
                        <br>
                        <input name="merchantapiusername" required value="{{$gateways[1]->merchantApiusername}}" placeholder="" class="form-control">

                        <br>

                        <label>Merchant ID</label>
                        <br>
                        <input name="merchantid" required value="{{$gateways[1]->merchantId}}" placeholder="" class="form-control">
                        <br>
                        <label>Return URL</label>
                        <br>
                        <input name="returnurl" required readonly value="{{$gateways[1]->returnUrl}}" placeholder="" class="form-control">

                        <label>Active:</label>
                        <select class="form-control" name="status">
                            @if($gateways[1]->status=='0')
                                <option value="0">No</option>
                            @endif
                            @if($gateways[1]->status=='1')
                                <option value="1">Yes</option>
                            @endif
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <br>
                        <a href="#" style="cursor: pointer">   <button type="submit" class="btn btn-primary form-control">Save Changes</button></a>
                    </form>

                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection

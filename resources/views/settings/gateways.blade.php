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
                 <h3>1-PayPal</h3><br>
                 <form action="{{route('gateway.updatepaypal')}}" method="post">
                     @csrf

                     <input name="email" required value="{{$gateways[0]->email}}" placeholder="Enter email..." class="form-control">

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
                    <h3>2-Stripe</h3><br>
                    <form action="{{route('gateway.updatestripe')}}" method="post">
                        @csrf
                        <input name="private_key" required value="{{$gateways[1]->private_key}}" placeholder="Enter Private Key..." class="form-control"><br>
                        <input name="public_key" required value="{{$gateways[1]->public_key}}" placeholder="Enter Public Key..." class="form-control">
                        <br>
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
                        <a href="#" style="cursor: pointer"><button class="btn btn-primary form-control">Save Changes</button></a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

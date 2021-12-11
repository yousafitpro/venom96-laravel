@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="widget style1 navy-bg">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Total Users </span>
                        <h2 class="font-bold">{{$userCount}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 bg-success">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-trophy fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Total Tournaments </span>
                        <h2 class="font-bold">{{$tournamentCount}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 bg-warning">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-gamepad fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span>Total Games </span>
                        <h2 class="font-bold">{{$gameCount}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 bg-danger">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-ticket fa-5x"></i>
                    </div>
                    <div class="col-8 text-right">
                        <span> Total Lotteries </span>
                        <h2 class="font-bold">{{$lotteryCount}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-header">
                   Today Registered Users
               </div>
               <div class="card-body">
                   <div class="table-responsive">
                       <table class="table  table-bordered table-hover dataTables-example" >
                           <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Status</th>
                               <th>Actions</th>
                           </tr>
                           </thead>
                           <tbody>

                           @foreach($users as $user)
                               <tr class="center">
                                   <td>{{$user->fname." ".$user->lname}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>{{$user->phone}}</td>
                                   @if($user->status=='1')<td>Active</td>@endif
                                   @if($user->status=='0')<td>Not-Active</td>@endif
                                   <td width="50px">
                                       <div class="dropdown dropdown-menu-bottom">
                                           <i class="fa fa-cogs" data-toggle="dropdown"></i>

                                           <ul class="dropdown-menu">
                                               <li><a href="#" data-toggle="modal" data-target="#deleteModel">Delete</a></li>
                                               <li><a href="{{route('admin.user.getOne',$user->id)}}">Edit/View</a></li>
                                               <li><a href="{{route('admin.user.active',$user->id)}}">Active</a></li>
                                               <li><a href="{{route('admin.user.unActive',$user->id)}}">Deactive</a></li>
                                           </ul>
                                       </div>
                                   </td>
                               </tr>
                               {{--            Delete Moel--}}
                               <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Alert</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                               </button>
                                           </div>
                                           <div class="modal-body">
                                               <h3>Are you want to Delete this ?</h3>
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                               <a href="{{route('admin.user.deleteOne',$user->id)}}"> <button type="button" class="btn btn-primary">Yes</button></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                           </tbody>
                           <tfoot>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Status</th>
                               <th>Actions</th>
                           </tr>
                           </tfoot>
                       </table>
                   </div>
                   <script>
                       $(document).ready(function(){
                           $('.dataTables-example').DataTable({
                               pageLength: 25,
                               responsive: true,
                               dom: '<"html5buttons"B>lTfgitp',
                               buttons: [
                                   { extend: 'copy'},
                                   {extend: 'csv'},
                                   {extend: 'excel', title: 'ExampleFile'},
                                   {extend: 'pdf', title: 'ExampleFile'},

                                   {extend: 'print',
                                       customize: function (win){
                                           $(win.document.body).addClass('white-bg');
                                           $(win.document.body).css('font-size', '10px');

                                           $(win.document.body).find('table')
                                               .addClass('compact')
                                               .css('font-size', 'inherit');
                                       }
                                   }
                               ]

                           });

                       });

                   </script>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection

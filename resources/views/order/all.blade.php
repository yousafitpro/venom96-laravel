@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>All Orders</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
{{--                    <a href="{{route('admin.product.add')}}">  <button class="btn btn-primary float-right"> Add New</button></a>--}}
                </div>
            </div>
            <br>
    <div class="table-responsive">
        <table class="table  table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>User</th>
                <th>Number of Products</th>
                <th>Placed at</th>
                <th>Status</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($items as $item)
            <tr class="center">
                <td>
                    <img src="{{$item->image_url}}" style="width: 60px">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->type}}</td>
                <td width="50px">
                    <div class="dropdown dropdown-menu-bottom">
                        <i class="fa fa-cogs" data-toggle="dropdown"></i>

                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#deleteModel">Delete</a></li>
                            <li><a href="{{route('admin.product.getOne',$item->id)}}">Edit/View</a></li>
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
                           <a href="{{route('admin.product.deleteOne',$item->id)}}"> <button type="button" class="btn btn-primary">Yes</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>User</th>
                <th>Number of Products</th>
                <th>Placed at</th>
                <th>Status</th>
                <th>Type</th>
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
@endsection

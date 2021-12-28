@extends('layouts.dashboard')
@section('content')
    @include('category.add')
    <div class="card">
        <div class="card-header">
            <h3>All Games</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" data-toggle="modal" data-target="#addModel">  <button class="btn btn-primary float-right"> Add New</button></a>
                </div>
            </div>
            <br>
    <div class="table-responsive">
        <table class="table  table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Category</th>
                <th>Products</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($items as $item)
                @include('category.update')
            <tr class="center">
                <td>
                    <img src="{{$item->image_url}}" style="width: 60px">
                </td>
                <td>{{$item->name}}
                    @if($item->is_new=="1")
                        <small><p style="color: green; float: right; font-weight: bold">(New)</p></small>
                    @endif
                </td>
                <td>{{$item->type}}</td>
                <td>{{$item->product_count}}</td>
                <td width="50px">
                    <div class="dropdown dropdown-menu-bottom">
                        <i class="fa fa-cogs" data-toggle="dropdown"></i>

                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#deleteModel">Delete</a></li>
                            @if($item->is_new=="0")
                            <li><a href="{{route('admin.category.set_as_new',$item->id)}}" >set as New</a></li>
                            @endif
                            @if($item->is_new=="1")
                            <li><a href="{{route('admin.category.set_as_old',$item->id)}}" >set as Old</a></li>
                            @endif
                            <li><a href="#" data-toggle="modal" data-target="#updateModel{{$item->id}}" >Edit/View</a></li>
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
                           <a href="{{route('admin.category.deleteOne',$item->id)}}"> <button type="button" class="btn btn-primary">Yes</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Thumbnail</th>
                <th>Name</th>
                <th>Category</th>
                <th>Products</th>
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

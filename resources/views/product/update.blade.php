@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form action="{{route('admin.product.update',$request->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3> <i class="fa fa-edit"></i> Update Product </h3>
                        </div>
                        <div class="card-body">
                            @include('errorBars.errorsArray',['title' => 'Error','errors'=>$errors])

                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label >
                                                Name
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <input name="name" value="{{$product->name}}" required class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{$product->image_url}}" style="width: 40px">
                                            <label >
                                                Thumbnail Image
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label >
                                                Price
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <input name="price" value="{{$product->price}}" required class="form-control" type="number">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label >
                                                Type
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="type" required>
                                            @if($product->type=="secret_detail")
                                                <option value="secret_detail">Secret Details Product</option>
                                              @endif
                                                @if($product->type=="code_delivery")
                                                <option value="code_delivery">Code Delivery Product</option>
                                                @endif
                                                <option value="secret_detail">Secret Details Product</option>
                                                <option value="code_delivery">Code Delivery Product</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label >
                                                Category
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="category" required>
                                                <option value="{{$product->category->id}}">{{$product->category->name}}</option>
                                                @foreach($cates as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="text-right" >
                                                Secret Data
                                            </label>
                                            <small style="color: darkred">(Private)</small>
                                            <br>
                                            <textarea class="summernote" name="secretdata" required style="height: 70px">{{$product->secret_info}}</textarea>


                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="text-right" >
                                                Short Details
                                            </label>
                                            <small style="color: green">(Public)</small>
                                            <br>
                                            <textarea class="summernote" name="shortdata" required style="height: 200px">{{$product->short_info}}</textarea>


                                        </div>

                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label >
                                                Status
                                            </label>
                                            <br>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control" name="status" required>
                                                <option value="{{$product->status}}">{{$product->status}}</option>
                                                <option value="active">active</option>
                                                <option value="unactive">unactive</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <button class="btn btn-primary float-right" type="submit" >Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

@endsection

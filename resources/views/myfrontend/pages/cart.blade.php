
@extends('layouts.myfrontend')
@section('content')


    <section class="cart">
        <div class="inner">
            <form action="" method="post">
                <h1>
                    Shopping Cart
                </h1>
                <div class="item_calculator">
                    <div class="inside">
                        <label class="cpt-checkbox checkbox_wrp">
                            <input type="checkbox" name="select_all"><span class="sl">Select All</span>
                            <span class="count"><b>{{$products->count()}}</b> item(s) selected</span>
                            <span class="price">Total Price <b class="user-balance">{{$total}}</b></span>
                            <div class="btc" id="ua-PayNowButton" eventlabel="Shopping Cart Pay Now">
                                <div class="cart_btn">
                                    <label><button class="btn btn-primary" type="submit"><i class='fa fa-shopping-cart'></i>Pay Now</button></label>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="cart_list_wrap">
                    <div class="seller_wrap">
                        <a href="#">
{{--                            <i class="fa-solid fa-lg fa-circle-user"></i>--}}
{{--                            <span>xuli112233</span>--}}
{{--                            <span class="hearts">--}}
{{--                                <i class="fa-solid fa-heart"></i>--}}
{{--                                <i class="fa-solid fa-heart"></i>--}}
{{--                                <i class="fa-solid fa-heart"></i>--}}
{{--                                <i class="fa-solid fa-heart"></i>--}}
{{--                            </span>--}}
{{--                            <span class="msg">--}}
{{--                                <i class="fa-solid fa-message"></i>--}}
{{--                            </span>--}}
                        </a>
                    </div>
                    <ul class="cart_list">
                        <li class="title">
                            <div class="item">Item</div>
                            <div class="price">Price / Package</div>
                            <div class="quantity">Quantity</div>
                            <div class="amount">Amount</div>
                            <div class="function"></div>
                        </li>
                        @foreach($products as $p)
                        <li class="li_list">
                            <div class="item">
                                <label class="cpt-checkbox checkbox_wrp">
                                    <input type="checkbox" name="select_all">
                                </label>
                                <div class="item_info">
                                    <span>
                                        <div class="img">
                                            <img src="{{asset($p->product->image_url)}} " alt="">
                                        </div>
                                    </span>
                                    <h3>
                                        <a href="https://www.kaleoz.com/buy/ms-m/223331" target="_blank">
                                            {{$p->product->name}}
                                        </a>
                                        <div class="function">
                                            <span>
                                                <i class="fa-solid fa-trash"></i>
                                            </span>
                                        </div>
                                    </h3>
{{--                                    <div class="info_wrap">--}}
{{--                                        <div class="dropdown">--}}
{{--                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                             Order Information--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                                <ul class="info_dropdown ">--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Game</span><span class="C">MapleStory M</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Item Category</span><span class="C">Mesos</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Server</span><span class="C">Asia 2 - Asia 2 - Scania</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Item Name</span><span class="C">a</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Item Types</span><span class="C">a</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Item Ranks</span><span class="C">aa</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Registered Price</span><span class="C">a</span>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="dropdown-item">--}}
{{--                                                        <span class="T">Listed Item Duration</span><span class="C">a</span>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                          </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="price">
                                <div class="pri_p"><b class="pri"><b class="user-balance"> {{$p->product->price}}</b></b></div>
{{--                                <div class="pri_u">100m </div>--}}
                            </div>
                            <div class="qtn">
                                <ul>
                                    <li>
                                        <div class="quantity">
                                            <div class="input">
                                                <div class="quantity_box">
                                                <label class="quantity_wrp cpt-quantity" quantity="140">
                                                    <div class="qty">
{{--                                                        <span onclick="minus('quntity{{$p->id}}')" class="minus" >-</span>--}}
                                                        <input readonly id="quntity{{$p->id}}" type="number" class="count" name="qty" value="{{$p->quantity}}">
{{--                                                        <span class="plus" onclick="add('quntity{{$p->id}}')">+</span>--}}
                                                    </div>
                                                </label>
                                                </div>
                                            </div>
                                    </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="amount">
                                <div class="amt_p" data-title="Amount">
                                    <b class="pri"><b class="user-balance">{{$p->price*$p->quantity}}</b></b>
                                </div>
                            </div>
                            <div class="function">
                                <span>
                                    <a href="{{route('home.productDetails1',$p->product->id)}}"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="{{route('home.removeProduct',$p->id)}}">  <i class="fa-solid ml-2 fa-trash"></i></a>
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </form>

        </div>
    </section>


 <script src="{{asset('js/cart.js')}}"></script>
    <script>
       function add(id)
       {
           var v=parseInt($("#"+id).val())

           $("#"+id).val(v+1)

           }
       function minus(id)
       {
           var v=parseInt($("#"+id).val())
if (v>1)
    {

           $("#"+id).val(v-1)
        }

       }
    </script>
@endsection





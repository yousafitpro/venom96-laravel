
@extends('layouts.frontend')
@section('content')
    <link href="{{asset('css/product-list.css')}}" rel="stylesheet">

    <div class="container-fluid">
        <div class="inner">
            <div class="row">
                <div class="col-md-2">
                    <div class="container">
                        <div id="game_cover">
                            <div class="cover"><img class="GamePic" alt="Final Fantasy XIV" src="{{$item->image_url}}"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="game_info">
                        <h1>Final Fantasy XIV</h1>
                        <ul>
                            <li><span>Global</span></li>
                            <li><span>PC</span></li>
                            <li><span class="publisher">Square Enix</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div id="short_cut">
                        <a href="https://www.kaleoz.com/guide/category/buying-guide" id="item_buy_guide" target="_blank" icon="help_outline"><i class="fas fa-tag"></i><span><b>How to buy</b><i>Find out the buying guide here</i></span></a>
                        <a href="https://www.kaleoz.com/sell?game_id=5" id="item_sell_link" icon="loyalty"><i class="fa-regular fa-circle-question"></i><span><b>Sell Product</b><i>List your item & start selling now</i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="inside">
               <div class="item_filter">
                <div class="filter_ctrl"><span>Filter</span></div>
                   <div class="filter_wrap">
                       <div class="row">
                        <div class="col-md-4">
                            <h3>Search</h3>
                            <div class="input-group mb-3">
                             <div class="input-group-prepend">
                               <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</button>
                               <div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                                 <div role="separator" class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Separated link</a>
                               </div>
                             </div>
                                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                 <div class="input-group-append">
                                   <span class="input-group-text">
                                       <i class="fa fa-search"></i>
                                   </span>
                                 </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                             <div class="item_server">
                                 <h3>Server</h3>
                                 <div class="item_server_wrap">
                                    <select name="languages" id="lang">
                                      <option value="javascript">JavaScript</option>
                                      <option value="php">PHP</option>
                                      <option value="java">Java</option>
                                      <option value="golang">Golang</option>
                                      <option value="python">Python</option>
                                      <option value="c#">C#</option>
                                      <option value="C++">C++</option>
                                      <option value="erlang">Erlang</option>
                                    </select>
                                    <select name="languages" id="lang">
                                        <option value="javascript">JavaScript</option>
                                        <option value="php">PHP</option>
                                        <option value="java">Java</option>
                                        <option value="golang">Golang</option>
                                        <option value="python">Python</option>
                                        <option value="c#">C#</option>
                                        <option value="C++">C++</option>
                                        <option value="erlang">Erlang</option>
                                      </select>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-4"></div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
        <div class="product_list">
           <div class="inside">
            <div class="sorting">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sort">
                            <div class="dropdown_ctrl sort_ctrl" icon="keyboard_arrow_down"><span>Sort: <b>Hot</b></span><i class="fa fa-angle-down"></i></div>
                            <ul class="tabs dropdown">
                                <li><div href="#hot" class="on"><span class="fa fa-fire"></span>Hot</div></li>
                                <li><div href="#new"><span class="fa fa-clock-o"></span>New</div></li>
                                <li class="sort_03"><div href="#price"><span class="fa fa-dollar"></span>Price</div></li>
                                <li><div href="#credit"><span class="fa fa-thumbs-up"></span>Rating</div></li>
                            </ul>
                            {{-- <div class="pane">
                                <div id="tab1">
                                    <h2>Hello</h2>
                                    <p>Hello hello hello.</p>
                                    <p>Goodbye goodbye, goodbye</p>
                                </div>
                                <div id="tab2" style="display:none;">
                                    <h2>Hello2</h2>
                                    <p>Hello2 hello2 hello2.</p>
                                    <p>Goodbye2 goodbye2, goodbye2</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-4 st">
                         <div class="status">
                            <div class="dropdown_ctrl sort_ctrl" icon="keyboard_arrow_down"><span>Show Seller</span><i class="fa fa-angle-down"></i></div>
                             <ul class="tabs dropdown">
{{--                                <li>--}}
{{--                                    <div class="premium_seller_ctrl on" id="premium_seller_filter">--}}
{{--                                        <span icon="recommend"><b>Premium Seller</b></span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="online_seller_ctrl">--}}
{{--                                        <span icon="3p">Online Seller</span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                             </ul>
                         </div>
                    </div>
                    <div class="col-md-2">
                        <div class="layout">
                            <div  id="layout_ctrl" class="btw" color="transparent"><span onclick="changeState()" id="fas" class="fa fa-list"></span></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="pager">
                            <a href="?page=1" class="btw pre disabled" color="transparent"><span class="fa fa-angle-left"></span></a>
                            <span class="pager_count"><i class="page_title">Page</i> <i class="current_page">2</i> / <i class="total_page">7</i></span>
                            <a href="?page=3" data-page="7" class="btw next" color="transparent"><span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
              <ol class="list list-view-filter">
              @foreach($products as $p)
                      <li>
                          <div class="item_list " data-item-count="156">
                              <div class="unit" data-stock="100" data-seller-status="pro_seller" data-store-status="">
                                  <div class="cell tit">
                                      <div class="img_wrp">
                                          <a href="https://www.kaleoz.com/buy/ffxiv-a-realm-reborn/182742" target="_blank" eventlabel="Cheap Final Fantasy XIV Gil in NA Hyperion Server on Sale"><img class="ItemPic" alt="Cheap Final Fantasy XIV Gil in NA Hyperion Server on Sale" src="{{$p->image_url}}" ></a>
                                      </div>
                                      <dl>
                                          <dt>
                                              <a href="https://www.kaleoz.com/buy/ffxiv-a-realm-reborn/182742" target="_blank" eventlabel="Cheap Final Fantasy XIV Gil in NA Hyperion Server on Sale">{{$p->name}}</a>
                                          </dt>
                                          <dd> Server Group: North American - Primal Server: NA - Hyperion</dd>
                                      </dl>
                                  </div>
                                  <div class="cell pri">
                                      <ul>
                                          <li class="price"><b class="user-balance">{{$p->price}}</b> / 5m Gil</li>
                                          <li class="unitprice"><b class="user-balance">US$ 1.00</b> = 470349.9494 Gil</li>
                                          <li class="stock">Stock: 100</li>
                                          <li class="trade">Trading volume: 0</li>
                                      </ul>
                                  </div>
                                  <div class="cell sel">
                                      <ul>

                                          <li class="chat">
                                              <a href="{{route('home.productDetails1',$p->id)}}">
                                                  <button  class="btn btn-primary">Add To Cart</button>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </li>
                  @endforeach

              </ol>
           </div>
        </div>
        <div class="about">
            <div class="row">
                <div class="col-md-5">
                    <div class="video">
                        <div class="youtube-player">
                            <video controls="controls" src="https://youtu.be/X9Ssx9AXYk4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="intro">
                            <article>
                                <h2>About Final Fantasy XIV-0</h2>
                                <div>
                                    <b>Final Fantasy XIV FF14</b> has come a long way since its
                                    rather rough initial release, but the long grind of gathering
                                    FFXIV Gil is one thing that hasn't changed. Obtaining FF14 Gil
                                    takes a lot of time -- time that could otherwise be spent
                                    enjoying some of the game's content. With the release of four
                                    major expansion packs: Heavensward (2015), Stormblood (2017),
                                    Shadowbringers (2019), and Endwalker (2021).<p>There are plenty
                                    of places to choose from, but here at KALEOZ.com, we offer
                                    the best value and prices for those looking to purchase
                                    FFXIV Gil. In FF14, in-game currency is required for buying
                                    supplies, equipment and -- most importantly -- crafting. FFXIV
                                    Gil is especially needed in large amounts when purchasing
                                    or creating higher tier items. KALEOZ.com provides a simple and
                                    affordable way to buy FFXIV Gil.<p>
                                </div>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script>
      // Layout Toggle
    const changeState = () => {
        const layout = document.getElementById('fas');
        layout.classList.toggle("fa-table-cells-large");
    }

    const listViewButton = document.querySelector('.fa-list');
    const gridViewButton = document.querySelector('.fa-table-cells-large');
    const list = document.querySelector('ol');


	$(document).on('click','#layout_ctrl',function(){
		$(this).toggleClass('layout_grid');
	});


    $(document).on('click','.dropdown_ctrl',function(){
		$(this).parent('div').toggleClass('dropdown_activated');
	});


    // listViewButton.onclick = function () {
    // list.classList.remove('grid-view-filter');
    // list.classList.add('list-view-filter');
    // }

    // gridViewButton.onclick = function () {
    // list.classList.remove('list-view-filter');
    // list.classList.add('grid-view-filter');
    // }

      $(document).ready(function() {
    $("ul.tabs a").click(function() {
        $(".pane div").hide();
        $($(this).attr("href")).show();
    });
})
  </script>

 <script src="{{asset('js/product-list.js')}}"></script>
@endsection



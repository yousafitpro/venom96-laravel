

<div class="container-fluid"   >

    <div class="row">
        <div class="col-md-12">
       <div   class="cateTopBox" style="position: relative ; height: 250px;  ">
           <div class="cateback" style="width: 100%; height: 100%; position:absolute;">

           </div>
           <div class="container-fluid" style="width: 100%; height: 100%; position:absolute;">
               <div class="row">
                   <div class="col-sm-3">

                       <img class="boxImage"  src="{{$item->imageUrl}}">
                   </div>
                   <div class="col-sm-6">
                       <h3 class="catename">{{$item->name}}</h3><br>
                       <h6 style="color: lightgrey">
                           Global |
                           Multiplatform |
                           Gameloft SE
                       </h6>
                   </div>
                   <div class="col-sm-3"></div>
               </div>
           </div>
      <div style="position: absolute; margin-left: 25%;  height: 50px; background:transparent; margin-top: 200px; width: 65%;">
        <div style="height: 100%; width: 100%; background-color: lightgrey; border-radius: 10px; position: absolute; opacity: 0.2" >

        </div>
          <div style="height: 100%; width: 100%;">
              <div class="container-fluid" >
                  <div class="row">
                      <div class="col-md-3" style="background-color: white; height: 100px; border-radius: 10px">
                        <div style="margin-top: 10px">
                            <img src="{{asset('images/reload.png')}}">
                            <small style="font-weight: bold">Reload Service (6)</small>
                        </div>
                      </div>
                      <div class="col-md-3" style="background-color: transparent; height: 100px; border-radius: 10px">
                          <div style="margin-top: 10px">
                              <img src="{{asset('images/accounts.png')}}">
                              <small style="font-weight: bold; color: white">Accounts</small>
                          </div>
                      </div>

                  </div>
              </div>
         </div>

      </div>
       </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row" >
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4">
                                <small>Search</small>
                           <div style="border: solid 1px lightgrey; height: 40px; ">
                              <div>

                                  <select style="height:30px; border: none;">
                                <option>Product</option>
                                  </select>
                                  <input style="border: none; outline: none" placeholder="keyword">
                              </div>
                           </div>
                            </div>
                            <div class="col-4">
                                <small>Server</small>
                                <div style="border: solid 1px lightgrey; height: 40px; ">
                                    <div>

                                        <select style="height:30px; border: none; width: 100%">
                                            <option>All Servers</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row" >
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                      @foreach($products as $p)
                            <div class="row">
                                <div class="col-1">
                                    <img src="{{$p->image_url}}" style="width: 60px">
                                </div>
                                <div class="col-5">
                                    <a href="#" style="font-weight: bold">
                                        {{$p->name}}
                                    </a>
                                </div>
                                <div class="col-3">
                                    <div style="text-align: center">
                                        <small style="color: red; font-weight: bold">{{$p->price}}</small>
                                        <small  >/ 100k Gold</small>
                                    </div>
                                    <div style="text-align: center">
                                        <small style="color: gray;  font-weight: bold">US$ 1.00 = 16888.3515 Gold</small>
                                    </div>
                                    <div style="text-align: center">
                                        <small style="color: gray;  font-weight: bold">Stock: 950 Trading volume: 502</small>

                                    </div>
                                </div>
                                <div class="col-3">

                                    <div style="width: 100%; height: 30px" class="myflex">
                                        <img src="{{asset('images/diamand.png')}}">
                                        <img src="{{asset('images/diamand.png')}}">
                                        <img src="{{asset('images/diamand.png')}}">
                                        <img src="{{asset('images/diamand.png')}}">
                                    </div>
                                    <br>
                                    <div style="width: 100%; height: 30px" class="myflex">
                                        <a href="{{route('home.productDetails',$p->id)}}">
                                            <button  class="btn btn-primary">Add To Cart</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function addToCart(url)
    {

        var order_id=null;
        {{--var product_id="{{$product->id}}";--}}
        if (localStorage.getItem("order_id"))
        {
            order_id=localStorage.getItem("order_id")
        }

        $.ajax({
            type: 'post',
            url: url,
            data: {"_token": "{{ csrf_token() }}"
            },
            success: function (data) {
                localStorage.setItem("order_id",data.order_id)
                alert("Product Added")
                // window.location.href=data.url
            }
        });
    }
</script>

<link href="{{asset('css/product.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="{{asset('js/product.js')}}"></script>
  
 <div class="container">
   <div class="row">
     <div class="col-md-4 image">
      <div class="item_photo">
        <a href="#" class="product_img">
          <img src="{{asset('images/product.webp')}}" alt="">
        </a>
      </div>
     </div>
     <div class="col-md-8">
      <div class="basic">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        <div class="item_info">
          <h1>
             MapleStory M Game Coins Mesos Gold Coin Asia2 Scania Fast
             and Reputation trade (10% fee not covered)
          </h1>
          <div class="item_info">
            <ul class="price_list">
              <li class="content">
                <div class="title"> Price </div>
                <div class="currency">
                  <span class="price">
                    <b class="balance">US$ 1.58 </b>
                  </span>
                  / 100m
                </div>
              </li>
              <li>
                <div class="title"> Stock </div>
                <div class="currency">
                  100m × 60
                </div>
              </li>
              <li>
                <div class="title"> Delivery </div>
                <div class="currency">
                  15 minutes
                </div>
              </li>
            </ul>
            <div class="description">
              SEND ITEM'S PICTURE. If you want buy when but i'm not online,
              just send me item's picture. I get item later when available.
              Sorry for some miss trades
            </div>
            <div class="purchase">
              <div class="item_purchase">
                <div class="inner">
                  <div class="form-style-2">
                    <form action="" method="post">
                      <ul>
                        <li>
                          <div class="label">Quantity</div>
                          <div class="input">
                          <div class="quantity_box">
                          <label class="quantity_wrp cpt-quantity" quantity="140">
                          	<div class="qty">
                              <span class="minus">-</span>
                              <input type="number" class="count" name="qty" value="1">
                              <span class="plus">+</span>
                          </div>
                          </label>
                          </div>
                          <div class="tips_wrp">
                          <div class="tips">Purchase range: 1 ~ 140</div>
                          </div>
                          </div>
                          </li>
                        <li>
                          <div class="label">
                            Server
                          </div> 
                          <div class="input">
                            <label for="field4">
                              <select name="field4" class="select-field">
                                <option value="General Question">General</option>
                                <option value="Advertise">Advertisement</option>
                                <option value="Partnership">Partnership</option>
                              </select>
                            </label>
                            <label for="field4">
                              <select name="field4" class="select-field">
                                <option value="General Question">General</option>
                                <option value="Advertise">Advertisement</option>
                                <option value="Partnership">Partnership</option>
                              </select>
                            </label>
                          </div>
                        </li>
                        <li>  
                          <div class="label">
                            Item Name
                          </div>    
                          <div class="input">
                            <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                          </div>
                        </li>
                        <li>  
                          <div class="label">
                            Item Type
                          </div>    
                          <div class="input">
                            <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                          </div>
                        </li>
                        <li>  
                          <div class="label">
                            Item Ranks
                          </div>    
                          <div class="input">
                            <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                          </div>
                        </li>
                        <li>  
                          <div class="label">
                            Registered Price	
                          </div>    
                          <div class="input">
                            <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                          </div>
                        </li>
                        <li>  
                          <div class="label">
                            Listed Item Duration
                          </div>    
                          <div class="input">
                            <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                          </div>
                        </li>
                      </ul>
                      <div class="total">
                        <div class="counter">
                              <ul>
                                <li>
                                  <div class="total_price">
                                      Total Price
                                  </div>
                                  <div class="currency">
                                      US$ 1.58
                                  </div>
                                </li>
                              </ul>
                        </div>
                        <div class="cart_btn">
                            <label><button class="btn btn-primary" type="submit"><i class='fa fa-cart-arrow-down'></i>Add To Cart</button></label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="buy_btn popup_ctrl">
               <button type="button" class="btn btn-primary btn-lg"><a  href="#open-modal"> Buy Now</a> </button>
            </div>
              <div id="open-modal" class="modal-window">
                <div class="purchase2">
                  <div class="item_purchase">
                    <div class="inner">
                      <label for="" class=" close_btn fa fa-times fa-lg" (click)="closeForm()"></label>
                      <div class="form-style-2">
                        <form action="" method="post">
                          <ul>
                            <li>
                              <div class="label">Quantity</div>
                              <div class="input">
                              <div class="quantity_box">
                              <label class="quantity_wrp cpt-quantity" quantity="140">
                                <div class="qty">
                                  <span class="minus">-</span>
                                  <input type="number" class="count" name="qty" value="1">
                                  <span class="plus">+</span>
                              </div>
                              </label>
                              </div>
                              <div class="tips_wrp">
                              <div class="tips">Purchase range: 1 ~ 140</div>
                              </div>
                              </div>
                              </li>
                            <li>
                              <div class="label">
                                Server
                              </div> 
                              <div class="input">
                                <label for="field4">
                                  <select name="field4" class="select-field">
                                    <option value="General Question">General</option>
                                    <option value="Advertise">Advertisement</option>
                                    <option value="Partnership">Partnership</option>
                                  </select>
                                </label>
                                <label for="field4">
                                  <select name="field4" class="select-field">
                                    <option value="General Question">General</option>
                                    <option value="Advertise">Advertisement</option>
                                    <option value="Partnership">Partnership</option>
                                  </select>
                                </label>
                              </div>
                            </li>
                            <li>  
                              <div class="label">
                                Item Name
                              </div>    
                              <div class="input">
                                <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                              </div>
                            </li>
                            <li>  
                              <div class="label">
                                Item Type
                              </div>    
                              <div class="input">
                                <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                              </div>
                            </li>
                            <li>  
                              <div class="label">
                                Item Ranks
                              </div>    
                              <div class="input">
                                <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                              </div>
                            </li>
                            <li>  
                              <div class="label">
                                Registered Price	
                              </div>    
                              <div class="input">
                                <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                              </div>
                            </li>
                            <li>  
                              <div class="label">
                                Listed Item Duration
                              </div>    
                              <div class="input">
                                <label for="field1"></span><input type="text" class="input-field" name="field1" value="" /></label>
                              </div>
                            </li>
                          </ul>
                          <div class="total">
                            <div class="counter">
                                  <ul>
                                    <li>
                                      <div class="total_price">
                                          Total Price
                                      </div>
                                      <div class="currency">
                                          US$ 1.58
                                      </div>
                                    </li>
                                  </ul>
                            </div>
                            <div class="cart_btn">
                                <label><button class="btn btn-primary" type="submit">Add To Cart</button></label>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div> 
  </div>  
   <div class="row">
      <div class="col-md-4 seller">
        <div class="seller_info">
          <div class="seller_name">
            <div class="name" >
              aroojsaghar
            </div>
            <div class="status">
            <i class="fa fa-heart" style="color: red"></i>
            <i class="fa fa-heart" style="color: red"></i>
            <i class="fa fa-heart" style="color: red"></i>
            </div>
          </div>
          <div class="data">
            <ul>
              <li>
                <div class="task">
                  Order Success
                </div>
                <div class="percentage">
                    96.67%
                </div>
              </li>
              <li>
              <div class="task">
                Total Sales
              </div>
              <div class="percentage">
                  83
              </div>
            </li>
            <li>
              <div class="task">
                Average Delivery Time
              </div>
              <div class="percentage">
                1hr 37min
              </div>
            </li>
            <li>
              <div class="task">
                Last Active Time
              </div>
              <div class="percentage">
                19hr 17min ago
              </div>
            </li>
            </ul>
          </div>
          <div class="rank">
            <div class="data">
              <ul>
                <li>
                  <div class="task">
                    Item Description
                  </div>
                  <div class="percentage">
                      5.00
                  </div>
                </li>
                <li>
                  <div class="task">
                    Service Quality
                  </div>
                  <div class="percentage">
                      5.00
                  </div>
                </li>
                <li>
                  <div class="task">
                  Delivery Speed
                  </div>
                  <div class="percentage">
                    5.00
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="icons">
            <a href="#">
              <div>
              <i class="fa fa-user"></i>
              </div>
              <span>Info</span>
            </a>
            <a href="#">
              <div>
              <i class="fa fa-home"></i>
              </div>
              <span>Store</span>
            </a>
            <a href="#">
              <div>
                <i class="fa fa-inbox"></i>
              </div>
              <span>Leave Message</span>
            </a>
          </div>
        </div>
      </div>  
      <div class="col-md-8">
        <div class=" desc">
          <div class="item_desc">
            <h3>Item Description</h3>
            <div>5 mins delivery, Message Me Thru KChat</div>
          </div>
        </div> 
          <div class="review">
            <h3>User Reviews</h3>
            <div class="top">
              <ul>
                <li>
                  Reviews
                  <b>70</b>
                </li>
                <li>
                  Service Rating
                  <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  </div>
                </li>
                <li>
                  Customer Satisfaction
                  <b class="percent">100%</b>
                </li>
              </ul>
            </div>
            <div>
                <ul class="comment_list">
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                  <li class="content">
                    <div class="buyer">
                      <span style='color:rgb(22, 156, 22); font-size:30px;'>&#9787;</span>
                    <b> John</b>
                    </div>
                    <div class="time">
                      January 30, 2022
                    </div>
                    <div class="comment">Great</div>
                  </li>
                </ul>
                <div class="More_btn">
                  <button class="btn btn-primary" id="loadMore"><a href="#" >Load More Comments</a></button>
                </div>
            </div>
          </div>
        
      </div>
   </div> 
</div>
  
<script>
  $(document).ready(function(){
  $(".content").slice(0, 4).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".content:hidden").slice(0, 4).slideDown();
    if($(".content:hidden").length == 0) {
      $("#loadMore").text(" ").addClass("noContent");
    }
  });
  
})
</script>


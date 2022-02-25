<div class="maintop1">
   <div class="inner">
   <ul>
        <li><a href="#" style="color: black; font-size: 15px; font-weight: bold">KALEOZ Steam Market</a></li>
        <li><a href="#">Game category</a></li>
        <li><a href="#">Become a Seller</a></li>
        <li><a href="#">User Guide</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Payment Methods</a></li>

@if(auth()->check())
            <li style="float:right"><a >( {{auth()->user()->fname." ".auth()->user()->lname}} )</a></li>
    @endif
    </ul>
    <div class="setting">
        <i class="fa fa-flag" aria-hidden="true"></i>
        <span>English / USD</span>
    </div>
   </div>

</div>

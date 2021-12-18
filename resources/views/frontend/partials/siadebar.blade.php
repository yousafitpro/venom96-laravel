<div  class="mysidebar card">
    <div class="container-fluid">
        <div class="row" style="padding-top: 10px">
            <div class="col" >
                <img style="width: 110px; height: 40px"   src="{{asset('myimages/topbarlogo.png')}}">

            </div>
            <div class="col">
                <div style="float: right; padding: 10px">
                    <i onclick="toggleSidebar()" style="zoom: 1.4" class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <a href="#" ><label style="font-size:18px; color: black; font-weight: bold">KALEOZ Steam Market</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">Game category</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">Become a Seller</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">User Guide</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">About Us</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">Contact Us</label></a><br>
                <a href="#" ><label style="font-size:18px; color: grey">Payment Methods</label></a><br>
            </div>
        </div>
    </div>
</div>

<script>
    var sidebar=false;
    function toggleSidebar()
    {
        sidebar=!sidebar;
        if (sidebar)
        {

            $(".mysidebar").animate({width: '250px'},200)
            $(".mysidebar").css("display",'block')
        }
        else
        {
            $(".mysidebar").animate({width: '0px'})
            $(".mysidebar").css("display",'none')
        }
    }
</script>


<div class="col-md-6 loginRight">
    <h3>SIGN IN</h3><br>
    <form method="POST" id="myForm" action="{{ route('login') }}">
        @csrf
    <div style="width: 100%; border: solid 2px lightgrey; padding: 5px; height: 50px; border-radius: 6px; position: relative" >

        <div style="position: absolute">
            <img style="height: 40px; width: 40px" src="{{asset('images/user.png')}}">
        </div>
        <div style="position: absolute">
            <input name="email" class="@error('email') is-invalid @enderror" style="border: none; outline: none; margin-left: 40px; height: 35px; padding-left: 10px" placeholder="Email">
        </div>
    </div>
    @error('email')
    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
    @enderror
    <br>
    <div style="width: 100%; border: solid 2px lightgrey; padding: 5px; height: 50px; border-radius: 6px; position: relative" >

        <div style="position: absolute">
            <img style="height: 40px; width: 40px" src="{{asset('images/lock.png')}}">
        </div>
        <div style="position: absolute">
            <input type="password" name="password" style="border: none; width: 60%; outline: none; margin-left: 40px; height: 35px; padding-left: 10px" placeholder="Password">
        </div>
        <div >
            <div style="float: right">
                <img onclick="SubmitMyForm()" style="height: 40px; width: 40px" src="{{asset('images/arrowright.png')}}">
            </div>
        </div>
    </div>
    </form>
    <br>
    <div style="width: 100%; text-align: center">
        <a href="#">Forgot Password</a>
    </div>
    <br>
    <div style="width: 100%; text-align: center">
        <small style="color: gray">Sign in with existing login from a social network account</small>
    </div>
    <br>
    <div style="width: 100%; text-align: center">
        <img style="height: 30px; width: 30px" src="{{asset('images/fb.png')}}">
        <img style="height: 30px; width: 30px" src="{{asset('images/tw.png')}}">
        <img style="height: 30px; width: 30px" src="{{asset('images/google.png')}}">
        <img style="height: 30px; width: 30px" src="{{asset('images/vk.png')}}">
        <img style="height: 30px; width: 30px" src="{{asset('images/ok.png')}}">
        <img style="height: 30px; width: 30px" src="{{asset('images/steam.png')}}">
    </div>
    <br>
</div>


<script>
    function SubmitMyForm()
    {
        document.getElementById("myForm").submit();
    }
</script>

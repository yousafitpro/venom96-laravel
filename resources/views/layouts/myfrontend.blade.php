



    <!DOCTYPE html>
<html>
<head>

    <title>Page Title</title>
    @include('myfrontend.inc.css')
</head>
<body>
@include('myfrontend.inc.topbar')
@include('myfrontend.inc.topbar2')
@yield('content')

@include('myfrontend.inc.js')
</body>
</html>

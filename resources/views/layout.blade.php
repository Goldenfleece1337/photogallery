<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css"

    <title></title>
</head>
<body>
 @include('inc.navbar') 

    <div class="container">

    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
    <div class="row">
    <div class="col-md-8 col-lg-8">
    @include('/inc.messages')
    @yield('content')
    </div>
    <div class="col-md-4 col-lg-4">
  
    </div>
    </div>
    </div>

    <footer class="text-center" id="footer"> 
    <p>copyright 2018 &copy; Farhad</p>
    </footer>
    
</body>
</html>
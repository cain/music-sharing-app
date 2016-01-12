<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="app-layout">
    <div class="top-nav">
    <div class="boundary">
    <div class="logo"><img src="/img/logo.png"></div> 
        
       <p class="logo-desc">Discover The Best New Music!</p>
        
        <!--<div class="login"><a href="#"><i class="fa fa-user"></i> SIGN UP</a> or <a href="#"><i class="fa fa-user"></i> LOGIN</a> </div> -->
        
        <a href="/login"><button class="btn btn-danger nav-button float-right" type="button" style=""><i class="fa fa-user"></i> Login</button></a>
        <a href="/register"><button class="btn btn-warning nav-button float-right" type="button" style=""><i class="fa fa-user"></i> Register</button></a>
        <a href="/login"><button class="btn btn-success arrow_box_green nav-button float-right" type="button" style=""><i class="fa fa-arrow-up"></i> Share Music</button></a>
    </div>
    </div>
    <div class="genre-nav">
    <div class="boundary">
     
        <div class="nav-links font-white">
            <p><a href="/" class="focus">ALL</a> - <a href="#">ELECTRONIC</a> - <a href="#">ROCK / METAL</a> - <a href="#">R&B</a> - <a href="#">JAZZ</a> - <a href="#">FOLK</a> - <a href="#">COUNTRY</a> - <a href="#">RAP</a> - <a href="#">REGGAE</a> </p>
        </div>
     
    </div>
    </div>
    @yield('subnav')
    <br>
    @yield('content')

    @yield('footer')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

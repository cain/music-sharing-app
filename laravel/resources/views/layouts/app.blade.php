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
    <div class="logo"><img src="img/logo.png" style="margin-bottom: 8px;"></div> 
      <div style="display:inline; margin-top:5px;">  
       <p class="logo-desc">Discover The Best New EDM Songs</p>
        </div>  

          <div class="searchbar " style="">
    <div class="input-group">
      <input type="text " class="form-control nav-height" placeholder="Search for, users, categories, tracks">
      <span class="input-group-btn ">
        <button class="btn btn-default nav-height" style="padding-top:3px;" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
        <button class="btn btn-success nav-button float-right " type="button" style=""> Create Account</button>
        <button class="btn btn-default nav-button float-right " type="button" style=""> Sign in</button>
        <a href="#" class="float-right share">Share Music</a>
    </div>
    </div>
    <div class="genre-nav">
    <div class="boundary">
     
        <div class="nav-links font-white">
            <!--<p><a href="#" class="focus">ALL</a> - <a href="#">INDIE</a> - <a href="#">ROCK</a> - <a href="#">ALTERNATE</a> - <a href="#">POP</a> - <a href="#">RAP</a> - <a href="#">ELECTRO</a> - <a href="#">EDM</a> - <a href="#">TRAP</a> - <a href="#">HIP/HOP</a> - <a href="#">JAZZ</a> - <a href="#">OLD</a></p>-->
            <p><a href="#">ALL</a> - <a href="#">HOUSE</a> - <a href="#">TECHNO</a> - <a href="#">TRANCE</a> - <a href="#">DUBSTEP</a> - <a href="#">CHILL</a> - <a href="#">D&B</a> - <a href="#">TRAP</a> - <a href="#">HARDSTYLE</a> - <a href="#">TRAP</a></p>
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

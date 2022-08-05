<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mobile- Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">




        <!-- new -->
      





<!-- Template Stylesheet -->

    
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
         
        <!-- Icon Font Stylesheet -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


     
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css ')}}" rel="stylesheet">
        <link href="{{ asset('css/new.css ')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css ')}}" rel="stylesheet">
        <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
        <!-- test-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


    </head>

    <body>
        <!-- Nav Start -->
        <div id="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid ">
                <div id="logo" class="pull-left" style="display: inline-block;">
                   <img src="{{ asset('img/products/mobile store-logos_black.png')}}" alt="Logo" style="width: 200px; height: 90px;"/>
                </div>
                @if (Route::has('login'))
                <div class="margin-l navbar-nav m-auto font-rubik font-size-14 pull-right" style="float: right; flex-direction: row;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link px-3 border-right border-left ">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" class="nav-link px-3 border-right border-left " value ="Log out">
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <nav id="nav-menu-container" style=" margin-right: -250px; margin-top: 60px;">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{ url('home') }}">Home</a></li>
                        <li><a href="{{ url('products') }}">Products</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="#products">Reviews</a></li>
                        <li><a href="">Cart</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Nav End -->
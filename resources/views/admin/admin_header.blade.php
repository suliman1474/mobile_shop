<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin Panel</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/"> -->

    

   <!-- CSS Libraries -->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('/')}}">Mobile Shop</a>
</header>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="">
        <h1 class="h2 text-center">Dashboard </h1>
        <div class="float-right " style="margin-top: -42px; margin-right: 150px;">
        <form action="{{ route('admin.logout')}}" method="GET">
        <button class="btn btn-dark btn-sm">Log out</button>
        </form>
        </div>
       <hr>
      </div>
    </main>
  </div>
</div>



<div class="container-fluid" style="position: relative;">
      <div class="row justify-content-center">
        <nav
          id="sidebarMenu"
          class="col-xxl-1 col-xl-1 col-lg-1 col-md-2 d-md-block bg-dark sidebar collapse"
          style="background-color: dark;"
        >
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="{{ route('admin.dashboard')}}">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('show_orders')}}">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('show_products')}}">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('show_users')}}">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              
             
            </ul>

          </div>
        </nav>

  
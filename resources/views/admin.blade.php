@extends('layouts.app')

@section('content')
<style>
    h1{
        margin-top: 10px;
        text-align: center;
       
    }
</style>

<div id="products">
            <div class="container">
                <div class="row align-items-center panel-link">
                <a href="">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 200px; width: 300px;">
                            <div class="product-content text-center">
                            <i class="fa-solid fa-bag-shopping fa-8x"></i>
                            <h2 class="text-muted">Products</h2> 
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 200px; width: 300px;">
                            <div class="product-content text-center">
                            <i class="fa-brands fa-first-order fa-8x"></i>
                               <h1 class="text-muted">Orders</h1>   
                            </div>
                        </div>
                    </div>
                    </a>


                    <a href="">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 200px; width: 300px;">
                            <div class="product-content text-center">
                            <i class="fa-brands fa-cc-paypal fa-8x "></i> 
                            <h2 class="text-muted">payments</h2> 
                            </div>
                        </div>
                    </div>
                    </a>


                    <a href="">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 200px; width: 300px;">
                            <div class="product-content text-center">
                            <i class="fa-solid fa-arrow-trend-down fa-8x"></i>
                            
                            <h2 class="text-muted">Out of stock</h2> 
                            </div>
                        </div>
                    </div>
                    </a>



                    <a href="">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="height: 200px; width: 300px;">
                            <div class="product-content text-center">
                            <i class="fa-solid fa-user fa-8x"></i>
                            <h2 class="text-muted">Users</h2> 
                            </div>
                        </div>
                    </div>
                    </a>



                    </div>
                </div>
 </div>
  

   @endsection
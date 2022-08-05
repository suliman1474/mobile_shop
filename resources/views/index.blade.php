@php use App\Http\Controllers\ProjectController; @endphp
@extends('layouts.main')

@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="{{ asset('img/Banner1.png') }}" alt="Los Angeles" width="700" height="500">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('img/Banner2.png') }}" alt="Chicago" width="700" height="500">
  </div>
  <div class="carousel-item">
    <img src="{{ asset('img/Banner1.png') }}" alt="New York" width="700" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>

<!-- Control the column width, and how they should appear on different devices -->
<!-- filter-->


<form action="">
<button type="submit" name="all"  value="All" class="btn btn-light ">All</button>
<button type="submit" name="samsung" value="Samsung"class="btn btn-light">Samsung</button>
<button type="submit" name="iphone" value="Iphone" class="btn btn-light ">Apple</button>
<button type="submit" name="other" value="Other" class="btn btn-light ">Other</button>
</form>





<!-- <script>
  var cat;
  document.getElementById("samsung").onclick= function myfun(){
    cat='samsung';
  }
  </script> -->



@php
$cat='*';

  if(isset($_GET['all'])){
    $cat='*';
  }
 
  if(isset($_GET['samsung'])){
    $cat='samsung';
  
  }
  if(isset($_GET['iphone'])){
    $cat='iphone';
  }
  if(isset($_GET['other'])){
    $cat='other';
  }
 
@endphp  

<!---- Filter end -->
 <!-- Products Start -->
 <div id="products">
            <div class="container">
                <!-- <div class="section-header">
                    <h2>Latest</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div> -->
                <div class="row align-items-center ">
                   @foreach($products as $product)
                       
                      @if($product->category == $cat || $cat == '*')
                      <div class=".col-sm-6 col-md-4 col-lg-4 col-xl-3">
                                <div class="card shadow p-3 mb-5 bg-body rounded ">
                                    <div class="product-img">
                                        <img src="{{ asset('img/products/'.$product->image) }}" alt="Product Image" style="widht:216px; height:216px;">
                                    </div>
                                    <div class="product-content">
                                      <a href="{{ url('single_product', ['id'=>$product->id]) }}">
                                          <h2>{{ $product->name }}</h2>
                                          </a>
                                          <h3>{{ $product->description }}</h3>
                                        <form method ="POST" action="{{ route('add_to_cart') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{$product->image}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                          
                                        <div class="card_btn">
                                        <input type="submit"  value="Add to Cart" class="cart_btn btn btn-outline-dark">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      @endif
                   
                    @endforeach
                    </div>

                    
                </div>

            </div>
  
@endsection
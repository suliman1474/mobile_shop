@extends('layouts.main ')

@section('content')




    <!-- Products Start -->
    <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="row align-items-center">
                   @foreach($products as $product)
                    <div class=".col-sm-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="card shadow p-3 mb-5 bg-body rounded">
                            <div class="product-img">
                                <img src="{{ asset('img/products/'.$product->image) }}"  style="widht:216px; height:216px;" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <a href="{{ route('single_product',['id'=>$product->id])}}"><h2>{{ $product->name }}</h2></a>
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
                    @endforeach
                    </div>
                    <div class="d-flex">
                        <div class="mx-auto">
                            {{$products->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                   
                </div>

            </div>
        

@endsection
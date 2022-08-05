@extends('layouts.main')

@section('content')

  @foreach ($item as $i)
       <!-- Products Start -->
       <div id="products">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="product-single">
                            <div class="product-img">
                                <img class="single-img-size" src="{{ asset('img/products/'.$i->image) }}" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2>{{ $i->name}}</h2>
                                <p>{{ $i->description}} Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                                <h3>$149</h3>

                                <form method ="POST" action="{{ route('add_to_cart') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{$i->id}}">
                                <input type="hidden" name="name" value="{{$i->name}}">
                                <input type="hidden" name="price" value="{{$i->price}}">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="image" value="{{$i->image}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                <input type="submit"  value="Add to Cart" class="cart_btn btn btn-outline-dark">
                                </form>
                               
                            </div>
                        </div>
                    </div>
                  
                </div>

            </div>
        </div>
        <!-- Products End -->
@endforeach
@endsection
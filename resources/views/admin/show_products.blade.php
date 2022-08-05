@extends('admin.admin_index')

@section('content')

   <!-- Page Content  -->
   
        @if(!$products)
          <h2 align='center'>No products</h2>
        @else 
        <div  class="" style="position: absolute; top:0px; left:200px;">

<button class="btn-dark btn-sm mb-2">
  <a style='color: white' href="{{ route('product_form')}}">Add Product</a>                
</button>
</div>
          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin-top: 50px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Category</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Sale Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($products as $product)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$product->name}}</td>

                 <td>{{$product->category}}</td>
              
           

              <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->sale_price}}</td>
              <td>{{$product->quantity}}</td>
              <td><img src="{{asset('img/products/'.$product->image)}}"  style="height: 40px; width: 50px;" alt=""></td>
              <td>
                <button class="btn-dark btn-sm">
                  <a style='color: white' href="{{ url('admin/delete_product',['id'=>$product->id]) }}">Delete</a>                
                </button>
                <button class="btn-dark btn-sm mt-1">
                  <a style='color: white' href="{{ route('update_form',['id'=>$product->id])}}">Update</a>                
                </button>
              </td>
              @php ($i++)
            </tr>
            @endforeach


          </tbody>
        </table>
        @endif
        
     
</div>
    </div>


@endsection
@extends('admin.admin_index')

@section('content')

   <!-- Page Content  -->
   
        @if(!$products)
          <h2 align='center'>No stock</h2>
        @else 
        <div  class="" style="position: absolute; top:0px; left:200px;">


</div>
          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin-top: 50px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Category</th>
              <th scope="col">Quantity</th>
              <th scope="col">Image</th>

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($products as $product)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$product->name}}</td>
              <td>{{$product->category}}</td>
              <td>{{$product->quantity}}</td>
              <td><img src="{{asset('img/products/'.$product->image)}}"  style="height: 40px; width: 50px;" alt=""></td>
            
              @php ($i++)
            </tr>
            @endforeach


          </tbody>
        </table>
        @endif
        
     
</div>
    </div>


@endsection
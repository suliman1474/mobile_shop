@extends('admin.admin_index')

@section('content')

   <!-- Page Content  -->
   
        @if(!$data)
          <h2 align='center'>No products</h2>
        @else 
        <div  class="" style="position: absolute; top:0px; left:200px;">


</div>
          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin-top: 50px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Product Name</th>
              <th scope="col">Price</th>
              <th scope="col">Transaction id</th>
              <th scope="col">Date of payment</th>
              <th scope="col">Image</th>
              

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($data as $d)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$d->name}}</td>

                 <td>{{$d->email}}</td>
              
           

              <td>{{$d->product_name}}</td>
              <td>{{$d->cost}}</td>
              <td>{{$d->transaction_id}}</td>
              <td>{{$d->date}}</td>
              <td><img src="{{asset('img/products/'.$d->product_image)}}"  style="height: 40px; width: 50px;" alt=""></td>
             
              @php ($i++)
            </tr>
            @endforeach


          </tbody>
        </table>
        @endif
        
     
</div>
    </div>


@endsection
@extends('admin.admin_index')

@section('content')

   <!-- Page Content  -->
   
        @if(!$orders)
          <h2 align='center'>No orders</h2>
        @else 
      
          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin-top: 50px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Cost</th>
              <th scope="col">City</th>
              <th scope="col">Adress</th>
              <th scope="col">Phone</th>
              <th scope="col">Date</th>
             

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($orders as $order)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$order->name}}</td>

                 <td>{{$order->email}}</td>
              
           

              <td>{{$order->status}}</td>
              <td>{{$order->cost}}</td>
              <td>{{$order->city}}</td>
              <td>{{$order->address}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->date}}</td>
             
              @php ($i++)
            </tr>
            @endforeach


          </tbody>
        </table>
        @endif
        
     
</div>
    </div>


@endsection
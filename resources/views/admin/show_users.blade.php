@extends('admin.admin_index')

@section('content')

   <!-- Page Content  -->
   
        @if(!$users)
          <h2 align='center'>No Users</h2>
        @else 
      
          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin-top: 50px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Created at</th>
              
             

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($users as $user)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$user->name}}</td>

                 <td>{{$user->email}}</td>
              
           

              <td>{{$user->created_at}}</td>
           
             
              @php ($i++)
            </tr>
            @endforeach


          </tbody>
        </table>
        @endif
        
     
</div>
    </div>


@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('css/admin.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>
<body>


@if(!$admins)
          <h2 align='center'>No Admins</h2>
        @else 
      
     
        <div class="container-fluid" style="position: relative;">
       <h2 align='center' style="text-align: center">Super Admin Dashboard</h2>
        <div class="float-right " style="margin-top: -42px; margin-right: 150px;">
        <form action="{{ route('superadmin.logout')}}" method="GET">
        <button class="btn btn-dark btn-sm">Log out</button>
        </form>
        </div>
       <hr>
          <hr>
         
          @if(Session::has('error'))
                  <div class="alert alert-warning alert-dismissible fade show" role="aler">
                    <strong>{{ session::get('error')}}</strong>
                    <button class="close" data-dismiss="alert" aria-lebel="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                @if(isset($error))
                  <div class="alert alert-warning alert-dismissible fade show" role="aler">
                    <strong>{{ $error}}</strong>
                    <button class="close" data-dismiss="alert" aria-lebel="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                        

          <div  class="" style="margin-left: 200px; margin-top: 50px; margin-bottom: 0px;">

                <button class="btn-dark btn-sm mb-2">
                <a style='color: white' href="{{ route('admin.register')}}">Add Admin</a>                
                </button>
        </div>
        
      <div class="row justify-content-center">
         
    

          <table class="table col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9 " style="margin: 50px; margin-top: 10px;">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Created at</th>
              <th scope="col">Delete</th>
              
             

            </tr>
          </thead>
          <tbody>
           @php ($i = 1)
            @foreach($admins as $admin)
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$admin->name}}</td>
              

                 <td>{{$admin->email}}</td>
              
           

              <td>{{$admin->created_at}}</td>
           
              <td>
                <button class="btn-dark btn-sm">
                  <a style='color: white' href="{{ route('superadmin.delete_admin',['id' => $admin->id]) }}">Delete</a>                
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








    
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
 <script src="https://kit.fontawesome.com/40a9af2f72.js" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <!-- Template Javascript -->
</body>
</html>
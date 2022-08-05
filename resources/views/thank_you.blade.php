@extends('layouts.main')

@section('content')

<section class="container mt-5 my-3 py-5">
    <div class="container mt-2 text-center">
        <h4>Thank you</h4>
   
             @if(Session::has('order_id') && Session::get('order_id') !=null)
                <h4 style="color:blue" class="my-5"> Order id: {{Session::get('order_id')}}</h4>
                <p>Please keep order id in safe place for future reference</p>
             <p>We will deliver you mobile within 2 business days</p>
            
            @endif
    </div>
</section>

@endsection
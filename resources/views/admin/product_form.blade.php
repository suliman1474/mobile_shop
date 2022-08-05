@extends('admin.admin_index')

@section('content')

<form action="{{ route('add_product')}}" method ="POST" enctype="multipart/form-data" class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-9">
@csrf   
<div class="mb-3 mt-3">
      <label for="name">Product Name:</label>
      <input type="text"  name="name">
    </div>
    <div class="mb-3 mt-3">
      <p><label for="description">Description</label></p>
      <textarea  name="description" rows="4" cols="50"></textarea>
    </div>
    <div class="mb-3 mt-3">
      <label for="price">Price</label>
      <input type="number"  name="price">
    </div>
    <div class="mb-3 mt-3">
      <label for="s_price">Sale Price</label>
      <input type="number"  name="s_price" value="Null">
    </div>

    <div class="mb-3 mt-3">
      <label for="quantity">Quantity</label>
      <input type="number"  name="quantity">
    </div>
    <div class="mb-3">
    <label for="cars">Choose a category:</label>
<select  name="category">
  <option value="iphone">Iphone</option>
  <option value="samsung">Samsung</option>
  <option value="realme">Realme</option>
  <option value="other">Other</option>
</select>
</div>
<div class="mb-3">
                <label class="form-label" for="inputImage">Image:</label>
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control @error('image') is-invalid @enderror">
  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
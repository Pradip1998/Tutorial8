@extends('master')

@section('content')


<form action="/home "  method="POST" >

        @csrf
  <div class="form-group">
    <label for="exampleInputproduct">Product_Name</label>
    <input type="text" class="form-control" id="exampleInputproduct" name="product_name" aria-describedby="emailHelp" placeholder="Product Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Type</label>
    <input type="text" class="form-control" id="exampleInputtype" name="product_type"  placeholder="Product Title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Quantity</label>
    <input type="number" class="form-control" id="exampleInputquantity" name="product_quantity"  placeholder="Product Quantity">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Price</label>
    <input type="number" class="form-control" id="exampleInputprice" name="product_price"  placeholder="Product Price">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Region</label>
    <select class="form-select" name="department" aria-label="Default select example">
       <option selected>Product Region</option>
        <option value="New South Wales">New South Wales</option>
        <option value="Victoria">Victoria</option>
        <option value="Queensland">Queensland</option>
        <option value="Western Australia">Western Australia</option>
        <option value="South Australia">South Australia</option>
        <option value="Tasmania">Tasmania</option>
      </select>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>











</form>






@endsection

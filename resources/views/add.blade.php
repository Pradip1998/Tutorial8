@extends('master')

@section('content')

        
      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Add Items</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
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

      


      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Items</a>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sn</th>
      <th scope="col">Product_name</th>
      <th scope="col">Product_Type</th>
      <th scope="col">Product_quantity</th>
      <th scope="col">Product_price</th>
      <th scope="col">Product_region</th>
      <th scope="col">Product_Image</th>
      <th scope="col">Product_Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>

      <th scope="row">1</th>
      
      <td>{{$product->product_name}}</td>
      <td>{{$product->type}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->region}}</td>
      <td>{{$product->id}}</td>
      <td>
      <a href="" class="btn btn-warning">update</a>
        <a href="/remove/{{ $product->id }}" class="btn btn-danger">remove</a>

      </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>


      


   


@endsection

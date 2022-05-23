@extends('master')

@section('content')



<!-- Contanier-->
<div class="container">
<div>
<div class="row">
<div class="col-12">



</div>
</div>
</div>
      <div class="row">
       <div class="col-12">
       <div class="background">
       <h1 class="text-center text-white display-4 header-text">Exploring Tasmanian Wine</h1>
       </div>
        <!--<img src="wine.jpg" alt=wine="wine image" width="100%" height="100%"/><br>-->
      </div>
    </div><br>

     <div class="row">
    <div class="col-sm-4"> <img src= "{{ asset ('redwine.jpg') }}" alt=wine="wine image" width="300" height="300"/>
     <div class="caption"><h4>Red Wine</h4>
          <p>Red wine is wine which is made from red grapes</p>
           <a href="Detail.html" class="btn btn-info" role="button"> View Detail >></a>
        </div>
     </div>
     
    <div class="col-sm-4"> <img src=whitewine.jpg alt=wine="wine image" width="300" height="300"/>
       <div class="caption"><h4>White Wine</h4>
          <p>White wine is wine which is fermented without skin</p>
       <a href="Detail.html" class="btn btn-info" role="button"> View Detail >></a>
        </div>
     </div>
    <div class="col-sm-4"> <img src=sparkling.jpg alt=wine="wine image" width="300" height="300"/>
     <div class="caption"><h4> Sparkling Wine</h4>
          <p>Sparkling wine is wine that has sufficent amount of carbon dioxide</p>
     <a href="Detail.html" class="btn btn-info" role="button"> View Detail >></a>
        </div>
     </div>
  </div>

</div>

<div class="modal" id="myModal"> 
      <div class="modal-dialog">
       <div class="modal-content">
      
      <!-- Modal Header-->
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration</h4>
        </div>
       
 <!--Model Body-->
  <div class="modal-body">
    <form class="form" action="#nowhere">
      <!--First Name-->
       <div class="form-group">
        <label for="fname">First Name</label>
         <input type="fname" class="form-control" id="fname" placeholder="">
       </div>
      <!--Email-->
       <div class="form-group">
        <label for="email">Email id</label>
         <input type="email" class="form-control" id="email" placeholder="">
       </div>
    <!-- Password-->
    <div class="form-group">
        <label for="pwrd">Password</label>
         <input type="pwrd" class="form-control" id="pwrd" placeholder="">
       </div>
    <!-- Confirm Password-->
     <div class="form-group">
        <label for="conpass">Confirm Password</label>
         <input type="conpass" class="form-control" id="conpass" placeholder="">
       </div>
    <!--Radio Buton-->
    <div class="form-group">
     <div class="form-check">
     <input class="form-check-input" type="radio" name="Gender" id="Male" value="option1" checked>
     <label class="form-check-label" for="Male">Male</label>
     </div>
   </div>
    
    <div class="form-group">
     <div class="form-check">
     <input class="form-check-input" type="radio" name="Gender" id="Female" value="option2" checked>
     <label class="form-check-label" for="Female">Female</label>
     </div>
   </div>
    
    <div class="form-group">
     <div class="form-check">
     <input class="form-check-input" type="radio" name="Gender" id="other" value="option3"checked>
     <label class="form-check-label" for="other">other</label>
     </div>
   </div>
    
    
    <!--checkbox-->
    <div class="form-group">
      <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked">I am over 18+</label>
        </div>
      </div>
     
    <!--close button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
    <!--submit button-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    </form>
  </div>


  </div>
  </div>    
</div>


 @endsection
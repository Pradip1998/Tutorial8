@extends('master')

@section('content')
 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registration</h4>
          </div>
          <form action="Details.html" method="post" >
            <label for="Fname">First Name </label>
            <input type="text" id="fname" class="form-control form-control-sm" name="fname" required placeholder="First Name">
            <label for="Lname">Last Name</label>
            <input type="text" id="lname" class="form-control form-control-sm" name="fname" required placeholder="Last Name">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control form-control-sm" required placeholder="Email Name">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control form-control-sm"  required placeholder="Password">
            <label for="cpasswod">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control form-control-sm" >
            <p>Gender</p>
            <input type="radio" id="html" name="fav_language"  value="Male">
           <label for="html">Male</label>
          <input type="radio" id="css" name="fav_language" value="Female">
          <label for="css">Female</label>
          <input type="radio" id="javascript" name="fav_language" value="Other">
          <label for="javascript">Other</label><br>
          <input type="checkbox" id="eighteen" name="eightten" >
          <label for="eighteen"> I am Over 18+</label><br>
          <input type="submit" class="btn btn-danger" data-dismiss="modal"  value="Close">
          <input type="submit" class="btn btn-primary"  value="Submit">
          
      </form>
    
          
        </div>
        
      </div>
    </div>
    
  </div>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://www.blog.motifphotos.com/wp-content/uploads/2021/05/panorama-photo-01-1200x328.jpg" alt="First slide">
      </div>
  
    </div>
  </div>
  
  
  
  <h1>Total area Producing area:146,128 ha</h1>
  
  <table class="container" >
  
    <tbody>
      <tr>
  
        <td><b>Number of Wine Regions<b> </td>
        <td><b>65</b></td>
      </tr>
  
  
        <td><b>Number of Wineries<b> </td>
        <td><b>2500</b></td>
      </tr>
    <tr>
    <td><b>Number Of Grap Growers<b> </td>
        <td><b>6300</b></td>
  
      </tr>
    <tr>
    <td><b>Total Havest Tonnes<b> </td>
        <td><b>1.73 million</b></td>
  
      </tr>
    <tr>
    <td><b>Red Grape Harvest<b> </td>
        <td><b>941,583 tonnes</b></td>
  
      </tr>
    <tr>
    <td><b>White Grape Harvest<b> </td>
        <td><b>786,871 tonnes</b></td>
  
      </tr>
  
    </tbody>
  </table>
  
  
  
 
  <style>
  * {
    box-sizing: border-box;
  }
  
  .row {
    margin-left:-5px;
    margin-right:-5px;
  }
  
  .column {
    float: left;
    width: 50%;
    padding: 5px;
  }
  
  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }
  
  th, td {
    text-align: left;
    padding: 16px;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  </style>
  </head>
  <body>
  
  
  
  <div class="row">
    <div class="column">
    <h4>White Varieties</h4>
      <table>
        <tr>
          <th>Grape</th>
        <th>Area Ha</th>
        <th>Percentage</th>
        </tr>
       <tbody>
    <tr>
  
      <td>Chardonnay</td>
      <td>21,442</td>
      <td>15%</td>
    </tr>
    <tr>
                  <td>Sauvignon Blanc</td>
                  <td>6,100</td>
                  <td>4%</td>
                </tr>
                <tr>
                  <td>Semillon</td>
                  <td>4,570</td>
                  <td>3%</td>
                </tr>
                <tr>
                  <td>Pinto Grigo Gris</td>
                  <td>3,731</td>
                  <td>2.6%</td>
                </tr>
                <tr>
                  <td>Riseling</td>
                  <td>3,175</td>
                  <td>2%</td>
                </tr>
    </tbody>
      </table>
    </div>
    <div class="column">
    <h4>Red Varieties</h4>
      <table>
                  <tr>
                      <th>Grape</th>
                      <th>Area Ha</th>
                      <th>Percentage</th>
                    </tr>
                    <tr>
                      <td>Shiraz</td>
                      <td>39,900</td>
                      <td>27%</td>
                    </tr>
                    <tr>
                      <td>Cabernet Sauvigeon</td>
                      <td>24,682</td>
                      <td>17%</td>
                    </tr>
                    <tr>
                      <td>Merlot</td>
                      <td>8,477</td>
                      <td>6%</td>
                    </tr>
                    <tr>
                      <td>Pinto Noir</td>
                      <td>4,948</td>
                      <td>3%</td>
                    </tr>
                    <tr>
                      <td>Grenache</td>
                      <td>1507</td>
                      <td>1%</td>
                    </tr>
              </table>
    </div>
  </div>
  
  
  
  

  


  



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
@endsection
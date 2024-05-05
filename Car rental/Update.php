<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
<style>
  /* Style for the button */
  .image-button {
    display: inline-block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #f0f0f0;
    cursor: pointer;
    overflow: hidden;
    background-size: cover;
    background-position: center;
  }
  
  /* Style for the image */
  .selected-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  body{

    background-color: #000000e0;
    color: #ff0505;
  }

</style>
</style>
  </head>
  <?php require 'navbar.php' ?>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <body>
    
<div class="container">
  <div class="py-5 text-center">
    
  <label for="fileInput" class="image-button" id="imageButton">
    <!-- Select Image -->
  </label>
  <input type="file" id="fileInput" style="display: none;" accept="image/*">
    <!-- <h2>Add New Car</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Already </span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul> -->

      <!-- <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code" fdprocessedid="77e9tl">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary" fdprocessedid="63b7k">Redeem</button>
          </div>
        </div>
      </form> -->

    </div>
    <div class="col-md-8 order-md-1 container">
      <h4 class="mb-3">Update Car Information</h4>
      <form class="needs-validation" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="make">Make</label>
            <input type="text" class="form-control" id="make" name='make' placeholder="" value="" required="" fdprocessedid="qm5bgc">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="" value="" required="" fdprocessedid="70vhpm">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="year">Year</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <!-- <span class="input-group-text">@</span> -->
            </div>
            <input type="date" class="form-control" id="year" name="year"  placeholder="Enter The Manufacture Year" required="" fdprocessedid="omqgq">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="color">Color <span class="text-muted"></span></label>
          <input type="text" class="form-control" id="color" name="color" placeholder="Enter Your Car Color" fdprocessedid="u4t6m">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="">
            <label for="class">Class</label>
            <select class="custom-select d-block w-100" id="class" name="class" required="" fdprocessedid="um629e">
              <option value="">Economy/Subcompact</option>
              <option>Compact</option>
              <option>Midsize</option>
              <option>Full-size</option>
              <option>SUVs/Crossovers</option>
              <option>Trucks/Pickup Trucks</option>
              <option>Luxury</option>
              <option>Sports Cars</option>
              <option>Electric/Hybrid</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div><br>

        

        <div class="mb-3">
          <label for="dlnumber">Driving License Number<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="dlnumber" name='dlnumber' placeholder="TN99 20240000999" fdprocessedid="vwtvk">
        </div>

        <div class="mb-3">
          <label for="od_rating">Odometer Reading</label>
          <input type="text" class="form-control" id="od_rating" name="od_rating" required="" fdprocessedid="nuif0j">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>



          
          <div class="">
            <label for="tank_status">Tank Status</label>
            <select class="custom-select d-block w-100" id="tank_status" name="tank_status" required="" fdprocessedid="um629e">
              <option value="Full">Full</option>
              <option value="Half" >Half</option>
              <option value="Empty" >Empty</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state. 
            </div>
          </div>
          <div class="mb-3">
          <label for="id">Car ID</label>
          <input type="text" class="form-control" id="id" name="id" required="" fdprocessedid="nuif0j">
          <div class="invalid-feedback">
            Please enter your Car ID.
          </div>
        </div>
        </div>      
          </div>
        </div>
        <hr class="mb-4">
        <div class="container" style="display: flex; justify-content: center;">
    <button class="btn btn-primary btn-lg btn-block" style="width:15rem;" type="submit" fdprocessedid="w0mqbh">Add New Car</button>
</div>



        <!-- <input type="file" id="file" name="file" > -->



      </form>
    </div>
  </div>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2024 VSS</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


<!-- <img src="https://tse1.mm.bing.net/th?id=OIP.CvMAeJSHI_WeUIJD8x32QAHaEZ&pid=Api&P=0&h=180" alt="none"> -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="form-validation.js"></script>
  

<span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['tank_status'])){
    $tank_status=$_POST['tank_status'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $year=$_POST['year'];
    $color=$_POST['color'];
    $class=$_POST['class'];
    $dlnumber=$_POST['dlnumber'];
    $od_rating=$_POST['od_rating'];
    $car_id=$_POST['id'];
    // $file=$_POST['file'];
    // echo $tank_status;
  }
  

  $servername='localhost';
  $username='root';
  $password='';
  $dbname='car_rental';
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
    echo 'Not connected';
  }
  // echo $tank_status;
  // echo $class;
  // echo $file;
  

 


  $sql = "UPDATE cars1 
  SET 
      make='$make',
      model='$model',
      year=$year,
      color='$color',
      class='$class',
      license_plate='$dlnumber',
      odometer_reading=$od_rating,
      tank_status='$tank_status' 
  WHERE 
      car_id=$car_id";


  $insert_sql=mysqli_query($conn,$sql);

  if($insert_sql){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Add Car</strong>New Car Information Update Successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  ';

  }
  else{
    echo 'failed' ;
  }


}


?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
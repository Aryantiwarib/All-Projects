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
    background-color:#485969;
    color:white;
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
      <h4 class="mb-3">Adding New Employee</h4>
      <form class="needs-validation" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="make">First Name</label>
            <input type="text" class="form-control" id="fname" name='fname' placeholder="" value="" required="" fdprocessedid="qm5bgc">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="model">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="" required="" fdprocessedid="70vhpm">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="year">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <!-- <span class="input-group-text">@</span> -->
            </div>
            <input type="text" class="form-control" id="phone_number" name="phone_number"  placeholder="" required="" fdprocessedid="omqgq">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="color">Driving License Number <span class="text-muted"></span></label>
          <input type="dlnumber" class="form-control" id="color" name="dlnumber" placeholder="TN99 20240000999" fdprocessedid="u4t6m">
          <div class="invalid-feedback">
            Please enter a valid License Number.
          </div>
        </div>


        <div class="mb-3">
          <label for="color">City<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" fdprocessedid="u4t6m">
          <div class="invalid-feedback">
            Please enter a City Name.
          </div>
        </div>

       


        <div class="mb-3">
          <label for="color">Street Address<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="street" name="street" placeholder="Enter Your Street Address" fdprocessedid="u4t6m">
          <div class="invalid-feedback">
            Please enter a City Name.
          </div>
        </div>

       

        

        <div class="mb-3">
          <label for="dlnumber">Postal Code<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="postal_code" name='postal_code' placeholder="" fdprocessedid="vwtvk">
        </div>
        

        <div class="mb-3">
          <label for="dlnumber">Province<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="province" name='province' placeholder="" fdprocessedid="vwtvk">
        </div>



        <div class="mb-3">
          <label for="od_rating">Employee Id</label>
          <input type="text" class="form-control" id="empId" name="empId">
      
        </div>

        <div class="mb-3">
          <label for="od_rating">category</label>
          <input type="text" class="form-control" id="category" name="category">
      
        </div>

        <div class="mb-3">
          <label for="od_rating">Discount</label>
          <input type="text" class="form-control" id="discount" name="discount">
      
        </div>


        <div class="mb-3">
          <label for="od_rating">work_location</label>
          <input type="text" class="form-control" id="work_location" name="work_location">
      
        </div>



          
        
        
          </div>
        </div>
        


        
      
          </div>
        </div>
        <hr class="mb-4">
        <div class="container" style="display: flex; justify-content: center;">
    <button class="btn btn-primary btn-lg btn-block" style="width:15rem;" type="submit" fdprocessedid="w0mqbh">Add New Employee</button>
</div>



        <!-- <input type="file" id="file" name="file" > -->



      </form>
    </div>
  </div>


  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2024-2025 VSS</p>
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
  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$postal_code=$_POST['postal_code'];
$province=$_POST['province'];
$city=$_POST['city'];
$street=$_POST['street'];
$dlnumber=$_POST['dlnumber'];
$phone_number=$_POST['phone_number'];
$empId=$_POST['empId'];
$category=$_POST['category'];
$discount=$_POST['discount'];
$work_location=$_POST['work_location'];
    // $file=$_POST['file'];
    // echo $tank_status;
  

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
  

  $sql="INSERT INTO employees (employee_id,street_address, city, province, postal_code, phone_number, driving_license_number,category,discount_eligibility,work_location_id,first_name, last_name) 
  VALUES ('$empId','$street', '$city', '$province', '$postal_code', '$phone_number', '$dlnumber','$category','$discount','$work_location', '$fname', '$lname');
  ";

  $insert_sql=mysqli_query($conn,$sql);

  if($insert_sql){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Add Car</strong>New Car Added Successfully.
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
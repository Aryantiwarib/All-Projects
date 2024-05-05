<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <?php require 'navbar.php'?>
  <body>

  <!-- ////////////////////////startforms//////////////////////// -->
  <div class="container  my-5 ">
    <!-- <h1 class="text-success" >Create New Account</h1> -->
    <button class="btn my-3  bg-success"><a href="accounts.php" class="text-dark">Signin</a></button>
    <button class="btn bg-success"><a href="signup.php" class="text-dark">Create Account</a></button>
  <form method='POST' action='signup.php'>
  <!-- Name, Address, Phone Numbers, and DriverLicenseNumber. -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="Enter Full email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="password" name='password' placeholder="Enter Your Password">
  </div>
  <button type="submit" class="btn btn-primary">Signin</button>
</form>
</div>
  <!-- ////////////////////////endforms//////////////////////// -->


  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='car_rental';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      echo '<div class="alert  alert-danger alert-dismissible fade show" role="alert">
      <strong>Hello Sir!</strong> We Are Not Able To Connect With Data Base Due To Some Error.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone_number=$_POST['phoneNumber'];
    $driving_license=$_POST['DrivingLicenseNumber'];

    $all='SELECT * FROM customers';
    $all_data=mysqli_query($conn,$all);
    $rows=mysqli_num_rows($all_data);
    if($rows>0){
      while($r=mysqli_fetch_array($all_data)){
        if($r['Driver_License_Number']==$driving_license){
          echo 'This user is already exists.';
          break;
        }
      }
    }
    $sql="INSERT INTO customers values('$name','$address','$phone_number','$driving_license')";
    $insert=mysqli_query($conn,$sql);
    if($insert){
      echo '<div class="alert  alert-success alert-dismissible fade show" role="alert">
      <strong>Hello Sir!</strong>Congratulations Your Account Created Successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }


  }
  
  ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
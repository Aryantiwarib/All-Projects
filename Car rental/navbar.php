<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
      #profile_img{
        width:50px;
        height:50px;
        border-radius:50%;
        margin-right:1rem;  
      }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php">Car Rental</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="find_name.php">Queries</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Add_new_car.php">Add Car</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Add_new_customer.php">Add Customer</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Add_new_employee.php">Add Employee</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="Booking_car.php">Book Car</a>
                </li>
            </ul>
            <button class="btn bg-primary mx-3"><a href="accounts.php" class="text-dark">Signin</a></button>
            <form class="form-inline my-2 my-lg-0">
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                <a href="Profile.php"><img src="profile_icon.png" id="profile_img" alt="none"></a>
                
            </form>
        </div>
    </nav>


</body>

</html>
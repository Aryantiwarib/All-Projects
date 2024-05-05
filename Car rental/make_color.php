<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
    body {
        background-color: #000000c7;
        color: white;
    }
    </style>

    <title>Details</title>
</head>
<?php require 'navbar.php' ?>

<body>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // $cname=$_POST['column'];
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='car_rental';
        $conn=mysqli_connect($servername,$username,$password,$dbname);



        // $column_sql="SELECT COLUMN_NAME
        // FROM information_schema.columns
        // WHERE TABLE_SCHEMA = 'car_rental' AND TABLE_NAME = 'cars1';";
        // $column_run=mysqli_query($conn,$column_sql);
        // $column_names=mysqli_fetch_array($column_run);
        // $new_column_name=array();
        
        // while ($column_names=mysqli_fetch_array($column_run)){
        //     $new_column_name[]=$column_names[0];
        // }

        // // echo $new_column_name[3];
        
        
        // if($cname=="" || !in_array($cname,$new_column_name)){
        //     echo "Please Enter The Column Name OR Column Name Must be valid!";
        // }
        // else{
        


        if(!$conn){
            echo "Not Connected successfully";
        }
        
        $sql="SELECT cars1.make, cars1.color
        FROM cars1
        JOIN rentals ON cars1.car_id = rentals.car_id;
        ";

        $result = mysqli_query($conn, $sql);
        $rows = array();
        while($r = mysqli_fetch_array($result)) {
            $rows[] = $r; 
        }
        $m=0;

        echo "<div class='container my-4  '
        <h3 style='font-size:1.2rem; color:red; font-weight:bold;' >Column Name:</h3>
        <p style='color:#bdc7ff; font-weight:bold;   ' >Make</p>
      </div>";
 
        for($i=0;$i<count($rows);$i++){
            echo "<div class='container  '
            <div class='list-group d-flex justify-content-center'>
            <button type='button' class='list-group-item list-group-item-action' aria-current='true' style='width: 20rem; font-size: 1.2rem; font-weight:bold; aria-current='true'>
            {$rows[$i][$m]}
            </button>
          </div>
          </div>";



            echo "<br>";
        }

        echo "<div class='container my-4  '
        <h3 style='font-size:1.2rem; color:red; font-weight:bold;' >Column Name:</h3>
        <p style='color:#bdc7ff; font-weight:bold;   ' >Color</p>
      </div>";
      
        for($i=0;$i<count($rows);$i++){
            echo "<div class='container  '
            <div class='list-group d-flex justify-content-center'>
            <button type='button' class='list-group-item list-group-item-action' aria-current='true' style='width: 20rem; font-size: 1.2rem; font-weight:bold; aria-current='true'>
            {$rows[$i][1]}
            </button>
          </div>
          </div>";



            echo "<br>";
        }


    }


        // }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
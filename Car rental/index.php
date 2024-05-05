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
        body{
            background-color:#212c37;
        }
    .cards {
        /* display: flex; */
        margin-left: 7rem;
    }
    .card{
        background-color:#ffffff1a;
        color:white;
        border-radius:10px;
    }
    </style>
    <title>Carrental.com</title>
</head>

<body>
    <?php require 'navbar.php'?>

    <!--//////////////////slider///////////////// -->
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="car_one.jpeg" class="d-block w-100 img-fluid " style="height:25rem; object-fit: cover;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="car_two.jpeg" class="d-block w-100 img-fluid" style="height:25rem; object-fit: cover;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="car_three.jpeg" class="d-block w-100 img-fluid" style="height:25rem; object-fit: cover;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>










    

    <!-- //////////////////////////end of slider ////////////////////// -->

    <!--///////////////////////// start of cards ///////////////////////// -->

    <?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='car_rental';
  $conn=mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    echo 'Not connected';
  }
  $sql="SELECT * FROM cars1";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($result);
  // echo $row;

  for($i=0;$i<$row;$i++){
    $r=mysqli_fetch_array($result);
       echo" <div  class='container my-4'>
    <div class='card mb-3' style='max-width: 1340px;'>
  <div class='row no-gutters'>
    <div class='col-md-4'>
      <img src='card_car_{$r[0]}.jpeg' class='img-fluid' style='width:32rem;' alt='...'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>{$r[1]}-{$r[2]}</h5>
        <p class='card-text'>{$r[5]} {$r[1]}</p>

        <p class='card-text'>{$r[1]} , {$r[2]} , {$r[3]} , {$r[4]} , {$r[5]}</p>



       

        <div class='text-success text-xl-start'>
        <p>FREE CALCELLATION</p>
        <p>₹18407<sub>total</sub></p>
        </div>


        <button class='btn bg-success'><a href='Update.php' style='text-decoration:none;'>Update</a></button>

      </div>
    </div>
  </div>
</div>
</div>";
  }
  


?>






    <!-- /////////////////fotter ///////////////////// -->


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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
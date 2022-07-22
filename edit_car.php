<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit your Car</title>
  <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <style>
    .box{
    position: absolute;
    border: 1px solid #eb5a45 ;
    width: 70%;
    height: 500px;
    margin-top: 7%;
    margin-left: 15%;
    border-radius: 5px;
    z-index: -1;
    margin-bottom: 20px;
    }
    .box1{
    width: 100%;
    height: 70px;
    line-height: 70px;
    text-align:center;
    font-size: 29px;
    color: white;
    background-image: linear-gradient(to right, #eb5a45 , #ed5d44,#f1683f,#f46e3c,#f67538,#f97d35);
    font-weight: bold;
    z-index: -1;
    border-bottom:1px solid #eb5a45 ;
    }
    .box2{
    width: 100%;
    height: 385px;
    padding-left:10%;
    padding-right:10%;
    padding-top:5%;
    padding-bottom:7%;
    z-index: -1;
    background-color: white;
    }
    .box3{
    width: 100%;
    height: 42px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    line-height: 42px;
    text-align: center;
    font-weight: bold;
    border-top: 1px solid #eb5a45;
    background-color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Car Rental Agency</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="agency_dashboard.php">Home</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              echo("<li class='nav-item'>
              <a class='nav-link' href='view_booked.php' tabindex='-1' aria-disabled='true'>Booked Cars</a>
            </li>");
            }
          ?>
        </ul>
        <a href="add_new.php"><button class="btn btn-outline-success" type="submit">Add New Cars</button></a>
        <a href="logout.php"><button class="btn btn-outline-danger mx-2" type="submit">Logout</button></a>
      </div>
    </div>
  </nav>
  <div class="box">
        <div class="box1">Edit Car</div>
        <div class="box2">
        <?php 
            $conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
            $id = $_POST['id'];
            $query="SELECT * FROM available_cars WHERE id='$id'";
            $data=mysqli_query($conn,$query);
            $result=mysqli_fetch_assoc($data);
        echo("
        <form action='edit_car_process.php' method='post'>
          <input type='hidden' name='id' value='{$id}'>
          <div class='form-group my-3'>
            <input type='text' class='form-control' placeholder='Vehicle model' name='V_Model' value='{$result['V_Model']}' required>
          </div>
          <div class='form-group my-3'>
            <input type='text' class='form-control' placeholder='Vehicle Number' name='V_Number' value='{$result['V_Number']}' required>
          </div>
          <div class='form-group my-3'>
            <input type='number' class='form-control' placeholder='Seating Capacity' name='Capacity' value='{$result['Capacity']}' required>
          </div> 
          <div class='form-group my-3'>
            <input type='number' class='form-control' placeholder='Rent per day(In Rs.)' name='PerDay' value='{$result['PerDay']}' required>
          </div>           
          <input type='submit' value='Update' name='submit2' class='btn btn-primiary btn-danger'>
          <input type='reset' value='Reset' class='btn btn-danger'>
        </form>");
        ?>
        </div>
        <div class="box3"></div>
        </div>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental Agency</title>
  <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <style>
    body{
      background-color:#43e97b;
    }
    .main_frame{
    position: relative;
    width: 100vw;
    height: 550px;
    text-align: center;
    background-color: #43e97b;
  }
    .frame_1{
    position: relative;
    width: 90%;
    margin: auto;
    height: 10%;
  }
    .frame_2{
    position: relative;
    width: 90%;
    height: 90%;
    margin: auto;
    border-radius: 5px;
    border-top: 1px solid #524747;
  }
    .subframe_1{
    position: relative;
    width: 100%;
    height: 15%;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom:1px solid #524747;
    background-color: #00ffff;
    font-size: 30px;
    color: black;
    font-weight: bold;
    text-align: center;
  }
    .text_1{
    position: absolute;
    width: 100%;
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
  }
    .subframe_2{
    position: relative;
    width: 100%;
    height:auto;
    font-size: 23px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    font-weight: bold;
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              echo("<li class='nav-item'>
              <a class='nav-link' href='user_bookings.php' tabindex='-1' aria-disabled='true'>My Bookings</a>
            </li>");
            }
          ?>
        </ul>
        <?php
          if(isset($_SESSION['username'])){
            echo("
            <button class='btn btn-outline-success' type='submit'>{$_SESSION['username']}</button>
            <a href='logout.php'><button class='btn btn-outline-danger mx-2' type='submit'>Logout</button></a>");
          }
          else{
            echo("
            <a href='register_user.php'><button class='btn btn-outline-success' type='submit'>SignUp</button></a>
            <a href='login_user.php'><button class='btn btn-outline-danger mx-2' type='submit'>Login</button></a>");
          }
        ?>
      </div>
    </div>
  </nav>
  <div class="main_frame">
    <div class="frame_1"></div>
    <div class="frame_2">
      <div class="subframe_1"><div class="text_1">Available cars to rent</div></div>
      <div class="subframe_2">
      <table class="table table-bordered table-success">
        <thead>
          <tr class="table-active">
            <th scope="col">#</th>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Seating Capacity</th>
            <th scope="col">Rent per Day(Rs.)</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $conn=new mysqli('localhost','root','','car rental agency') or die(mysqli_error($conn));
            $car_list=mysqli_query($conn,"SELECT * FROM available_cars");
            $i=1;
            while($row=mysqli_fetch_assoc($car_list)){
              echo("<tr>
                  <th scope='row'>{$i}</th>
                  <td>{$row['V_Model']}</td>
                  <td>{$row['V_Number']}</td>
                  <td>{$row['Capacity']}</td>
                  <td>{$row['PerDay']}/-</td>
                  <td>
                  <form action='user_booking_process.php' method='post'><input type='hidden' value='{$row['id']}' name='id'><input type='number' placeholder='No. of days' class='form-control input1' name='dayCount' required>
                  <input type='date' placeholder='Capture start date' class='form-control input2' name='startdate' required> 
                  <button class='btn btn-outline-success submt' type='submit'>Rent Car</button></form></td>
                  </tr>");
              $i=$i+1;
            }
          ?>
        </tbody>
      </table>
      </div>
    </div>
  </div> 
  <script type="text/javascript">
    var inp1 = document.querySelectorAll(".input1");
    var inp2 = document.querySelectorAll(".input2");
    var submit = document.querySelectorAll(".submt");
    <?php
      if(isset($_SESSION['username'])){
        echo("hhh");
      }
      else{
        echo("inp1.forEach(box => {
          box.style.display = 'none';
        });");
        echo("inp2.forEach(box => {
          box.style.display = 'none';
        });");
        echo("submit.forEach(box => {
          box.disabled= 'true';
        });");
      }
    ?> 
  </script>
</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link href="font/bootstrap-icons.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.bundle.min.js"></script>
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
    <h3 style="margin-top: 5%; margin-left: 5%;">This is the 'Car Rental Website' which is developed by 'Navin Kumar Shahi'</h3>
</body>
</html>
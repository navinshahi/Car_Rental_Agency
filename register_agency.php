<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register : Agency</title>
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" tabindex="-1" aria-disabled="true">About Us</a>
              </li>
            </ul>
            <a href="register_user.php"><button class="btn btn-outline-success" type="submit">SignUp</button></a>
            <a href="login_user.php"><button class="btn btn-outline-danger mx-2" type="submit">Login</button></a>
          </div>
        </div>
      </nav>
      <div class="box">
        <div class="box1">Sign Up as a Car Rental Agency</div>
        <div class="box2">
        <form action="connect_agency.php" method="post">
          <h1 style="color: brown;font-weight: bold"> SIGN UP</h1>
          <div class="form-group my-3">
            <input type="text" class="form-control" pattern="[a-zA-Z\s]+"placeholder="Company Name" title="Must contain only a-z or A-Z or spaces..."name="C_Name" required>
          </div>
          <div class="form-group my-3">
            <input type="email" class="form-control" placeholder="Company Email" name="C_Email" required>
          </div>
          <div class="form-group my-3">
            <input type="password" id="typepass"class="form-control" placeholder="Create Password" name="C_Password" required>
          </div>          
          <input type="submit" value="Register" name="submit2"class="btn btn-primiary btn-danger">
          <input type="reset" value="Reset" class="btn btn-danger">
        </form>
        </div>
        <div class="box3">Sign up as a Customer :- <a href="register_user.php"> Register</a></div>
        </div>
</body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Password=sha1($Password);
$Name=mysqli_real_escape_string($conn,$Name);
$Email=mysqli_real_escape_string($conn,$Email);
if(isset($_POST["submit2"]))
{
    $query="SELECT *FROM user_database WHERE Email='".$Email."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        echo '<script> alert("Email already exists...!!"); </script>';
        ?>
        <script type="text/javascript"> 
           window.location.href="register_user.php";
        </script> 
        <?php
        die(mysqli_error($conn));
    }   
}
$user_registration_query ="insert into user_database(Name,Email,Password) values('$Name','$Email','$Password')";
$user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Registration successfully...Click OK to login..");
window.location.href="login_user.php";
</script> 
<?php
?>

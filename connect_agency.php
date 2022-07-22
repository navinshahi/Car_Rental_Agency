<?php
$conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
$C_Name=$_POST['C_Name'];
$C_Email=$_POST['C_Email'];
$C_Password=$_POST['C_Password'];
$C_Password=sha1($C_Password);
$C_Name=mysqli_real_escape_string($conn,$C_Name);
$C_Email=mysqli_real_escape_string($conn,$C_Email);
if(isset($_POST["submit2"]))
{
    $query="SELECT *FROM agency_database WHERE C_Email='".$C_Email."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        echo '<script> alert("Email already exists...!!"); </script>';
        ?>
        <script type="text/javascript"> 
           window.location.href="register_agency.php";
        </script> 
        <?php
        die(mysqli_error($conn));
    }   
}
$user_registration_query ="insert into agency_database(C_Name,C_Email,C_Password) values('$C_Name','$C_Email','$C_Password')";
$user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Registration successfully...Click OK to login..");
window.location.href="login_agency.php";
</script> 
<?php
?>

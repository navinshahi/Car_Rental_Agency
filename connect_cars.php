<?php
session_start();
$conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
$C_Email=$_SESSION['C_Email'];
$V_Model=$_POST['V_Model'];
$V_Number=$_POST['V_Number'];
$Capacity=$_POST['Capacity'];
$PerDay=$_POST['PerDay'];
$C_Email=mysqli_real_escape_string($conn,$C_Email);
$V_Model=mysqli_real_escape_string($conn,$V_Model);
$V_Number=mysqli_real_escape_string($conn,$V_Number);
$Capacity=mysqli_real_escape_string($conn,$Capacity);
$PerDay=mysqli_real_escape_string($conn,$PerDay);
$user_registration_query ="insert into available_cars(C_Email,V_Model,V_Number,Capacity,PerDay) values('$C_Email','$V_Model','$V_Number','$Capacity','$PerDay')";
$user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Car Added Successfully!!");
window.location.href="agency_dashboard.php";
</script> 
<?php
?>

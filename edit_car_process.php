<?php
session_start();
$conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
$C_Email=$_SESSION['C_Email'];
$id=$_POST['id'];
$V_Model=$_POST['V_Model'];
$V_Number=$_POST['V_Number'];
$Capacity=$_POST['Capacity'];
$PerDay=$_POST['PerDay'];
$C_Email=mysqli_real_escape_string($conn,$C_Email);
$V_Model=mysqli_real_escape_string($conn,$V_Model);
$V_Number=mysqli_real_escape_string($conn,$V_Number);
$Capacity=mysqli_real_escape_string($conn,$Capacity);
$PerDay=mysqli_real_escape_string($conn,$PerDay);
$car_update_query ="UPDATE available_cars SET V_Model='$V_Model',V_Number='$V_Number',Capacity='$Capacity',PerDay='$PerDay' WHERE id='$id' ";
$car_update_submit=mysqli_query($conn,$car_update_query) or die(mysqli_error($conn));
?>
<script type="text/javascript"> 
alert("Car details updated successfully!!");
window.location.href="agency_dashboard.php";
</script> 
<?php
?>

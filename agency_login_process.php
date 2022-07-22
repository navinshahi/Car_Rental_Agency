<?php
session_start();
$conn =new mysqli('localhost','root','','car rental agency') or die(mysqli_error($conn));
$C_Email=$_POST['C_Email'];
$C_Password=$_POST['C_Password'];
$C_Password=sha1($C_Password);
$query="SELECT *FROM agency_database WHERE C_Email='$C_Email' AND C_Password='$C_Password'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$Nam=$result['C_Name'];
if(isset($_POST["submit2"]))
{
    $query="SELECT *FROM agency_database WHERE C_Email='".$C_Email."'AND C_Password='".$C_Password."'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['username']=ucfirst($Nam);
        $_SESSION['C_Email']=$C_Email;
        header("Location:agency_dashboard.php");
    }
    else
    {
        echo '<script> alert("Email/password not exist!!"); </script>';
        ?>
        <script type="text/javascript"> 
           window.location.href="login_agency.php";    
        </script>
        <?php
        exit();
    }
        
}
else
{
     exit();
}
mysqli_close($conn);
?>
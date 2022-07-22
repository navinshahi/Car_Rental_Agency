<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','car rental agency') or die(mysqli_error($conn));
    $Name = $_SESSION['username'];
    $Email = $_SESSION['Email'];
    $id = $_POST['id'];
    $dayCount = $_POST['dayCount'];
    $startdate = $_POST['startdate'];
    $query="SELECT * FROM available_cars WHERE id='$id'";
    $data=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($data);
    $C_Email = $result['C_Email'];
    $V_Model = $result['V_Model'];
    $V_Number = $result['V_Number'];
    $user_registration_query ="insert into booked_cars(Name,Email,C_Email,V_Model,V_Number,dayCount,startdate) values('$Name','$Email','$C_Email','$V_Model','$V_Number','$dayCount','$startdate')";
    $user_registration_submit=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
    $sql = "DELETE FROM available_cars WHERE id='$id'";
    if($conn->query($sql)!=TRUE){
        ?>
        <script type="text/javascript"> 
        console.log("Error");
        </script>
        <?php
    }
    ?>
    <script type="text/javascript"> 
    alert("Congratulations!!.....You have successfully booked your car.");
    window.location.href="index.php";
    </script> 
?>
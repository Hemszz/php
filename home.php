<?php 
session_start();
include "config.php";
 $email=$_SESSION['loginname'];

$query = "SELECT username FROM registration WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<title>Login and Registration page using sessions</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<div class="container">

 <div id="login-form">
        <h1>Hi Welcome, <?php echo $row['username'] ?></h1>
        <a href="logout.php">Logout</a>    
 </div> 

</div>

</body>
</html>
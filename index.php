<?php 
include "config.php";

if(isset($_POST['btn-signup'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(!empty($name) && !empty($email) && !empty($pass)){

        $sql = "INSERT INTO registration (username, password, email) VALUES ('$name', '$pass', '$email')";
    
        if ($conn->query($sql) === TRUE) {
            echo "User Details inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else{
        echo "please enter the registration details";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login and Registration page using sessions</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head><div class="container">

 <div id="login-form">
    <form method="post">
         <div class="col-md-12">
            <div class="form-group">
             	<h2 class="">Sign Up.</h2>
            </div>
            
           
    <div class="form-group">
        <span class="glyphicon glyphicon-info-sign"></span> 
    </div>
                
            
        <div class="form-group">
         <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="" />
            </div>
            <span class="text-danger"></span>
        </div>
            
        <div class="form-group">
         <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
         <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="" />
            </div>
            <span class="text-danger"></span>
        </div>
            
        <div class="form-group">
         <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
            </div>
            <span class="text-danger"></span>
        </div>
            
        <div class="form-group">
         <hr />
        </div>
            
        <div class="form-group">
         <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
        </div>
            
        <div class="form-group">
         <hr />
        </div>
            
        <div class="form-group">
         <a href="login.php">Sign in Here...</a>
        </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
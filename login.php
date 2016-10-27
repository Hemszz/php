<?php 
session_start();
include "config.php";

if(isset($_POST['btn-login'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];


    if(!empty($email) && !empty($pass)){

        $sql_validity = "SELECT * FROM registration WHERE email = '$email' AND password = '$pass'";
        if ($result=mysqli_query($conn,$sql_validity))
              {
                  // Return the number of rows in result set
                  $rowcount=mysqli_num_rows($result);
                 
                  // Free result set
                  //mysqli_free_result($result);
                  if($rowcount>0)
                    {
                        $_SESSION['loginname']= $email;
                        $_SESSION['loginpassword']= $pass;
                        header("location:home.php");
                    }
                    else
                    {
                         echo "Invalid Creditials";
                    }
              }
    }
    else
    {
        echo "Please enter email and password";
        exit;
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
                <h2 class="">Login</h2>
            </div>
            
           
    <div class="form-group">
        <span class="glyphicon glyphicon-info-sign"></span> 
    </div>
                
            
        <div class="form-group">
         <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         <input type="text" name="email" class="form-control" placeholder="Enter Name" maxlength="50" value="" />
            </div>
            <span class="text-danger"></span>
        </div>
            
            
        <div class="form-group">
         <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         <input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" />
            </div>
            <span class="text-danger"></span>
        </div>
            
        <div class="form-group">
         <hr />
        </div>
            
        <div class="form-group">
         <button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
        </div>
            
        <div class="form-group">
         <hr />
        </div>
            
        <div class="form-group">
         <a href="registration.php">Sign up</a>
        </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
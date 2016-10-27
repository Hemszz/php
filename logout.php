<?php 
session_start();
if(!empty($_SESSION['loginname']) && !empty(['loginpass'])){

  unset($_SESSION['loginname']);
  unset($_SESSION['loginpass']);
  //session_destroy();
  header("location:login.php");
}
?>


<?php
ob_start();
session_start();

$session_name = "simple_login";
if($_SESSION['name'] != $session_name){
	header('location: login.php');
}

include("header.php");
?>

<div class="col-md-12 text-center bg_home">
  <h1>Simple Login System</h1>
  <br>
  <a href="logout.php">Logout</a>
  </div>  
</div>
<?php include("footer.php"); ?>

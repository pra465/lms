<?php
	session_start();
	include './db.php';
	$msg="";
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$username=$_POST['email'];
		$password=$_POST['pass'];
		$sql = "SELECT * from admin where username='".$username."' and password='".$password."'"; 
        $res = $conn->query($sql);
		$count=mysqli_num_rows($res);
		if($count>0){
			$_SESSION['admin']=$username;
			header('location:admindashboard.php');
			die();	
		}
		else{
			$msg="please enter corrrect login details";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/login-style.css">
	<script src="https://kit.fontawesome.com/e7a70a44f9.js" crossorigin="anonymous"></script>
	<script src="myscript.js"></script>
</head>
<body>
	<form name="myForm"  onsubmit="return validateForm()" method="post">
	<div class="log" style="justify-content:space-between">
		<div class="sec1">
			<img src="./assets/adminloginpic.jpg">
		</div>
		<div class="sec2">
		  <h1>Admin Login</h1>
		  <br>
		  <div class="mail">
			 <i class="fas fa-user"></i>
		     <input type="text" name="email" placeholder="Username" required>
		  </div>
		  <br>
		 <div class="password">
		    	<i class="fas fa-lock"></i>
		       <input type="password" name="pass" placeholder="Password" required>
		 </div>
		 <br>
		 
		 <input type="submit" value="login">
		 <br>
		 <div class="result_msg"><?php echo $msg?></div>
		</div>
		<h3 class="cross"><a href="index.php">x</a></h3>
	</div>
	
	</form>
</body>
</html>
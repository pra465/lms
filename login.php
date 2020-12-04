<?php
	include './db.php';
	$msg="";
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$sql = "SELECT * from employee where email='".$email."' and password='".$password."'"; 
        $res = $conn->query($sql);
		$count=mysqli_num_rows($res);
		if($count>0){
			// $row=mysqli_fetch_assoc($res);
			// $_SESSION['ROLE']=$row['role'];
			// $_SESSION['USER_ID']=$row['id'];
			// $_SESSION['USER_NAME']=$row['name'];
			header('location:profile.php');
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
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/login-style.css">
	<script src="https://kit.fontawesome.com/e7a70a44f9.js" crossorigin="anonymous"></script>
	<script src="myscript.js"></script>
</head>
<body>
	<form name="myForm"  onsubmit="return validateForm()" method="post">
	<div class="log">
		<div class="sec1">
			<img src="./assets/loginpic.jpg">
		</div>
		<div class="sec2">
		  <h1>Login</h1>
		  <br>
		  <div class="mail">
			 <i class="fas fa-user"></i>
		     <input type="text" name="email" placeholder="E-mail" required>
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
<?php
   include './db.php';
   $msg = '';
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobno = $_POST['mobno'];
      $pass  = $_POST['pass'];
      $department_id = $_POST['department_id'];
      $role = $_POST['role'];
      $company = $_POST['company'];

      $s="select * from employee where email= '$email'";
      $result=mysqli_query($conn, $s);
      $num= mysqli_num_rows($result);
      if ($num>0) {
         $msg = "Email already exist. Click <a href='./login.php'>here</a> for login.";
      }
      else {
         $sql = "INSERT INTO employee VALUES ('".$name."', '".$email."', '".$mobno."','".$pass."','".$department_id."','".$role."','".$company."')";   
         if ($conn->query($sql) === TRUE) {
            header("location:home.php");
         }
         else{
            $msg = 'Wrong email or password';
         }
      }
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/signup-style.css">
	<script src="https://kit.fontawesome.com/e7a70a44f9.js" crossorigin="anonymous"></script>
	<script src="./scripts/signup.js"></script>
</head>
<body>
	<form name="myForm" action="./signup.php"  method="post">
	<div class="log">
		<div class="sec1">
			<img src="./assets/signuppic.jpg">
		</div>
		<div class="sec2">
		  <h1>Sign Up</h1>
		  <br>
		  <div class="name">
			 <i class="fas fa-user"></i>
		     <input type="text" name="name" placeholder="name">
		  </div><br>
		  <div class="mobile">
			 <i class="fas fa-mobile-alt"></i>
		     <input type="int" name="mobno" placeholder="mobile no.">
		  </div><br>
		  <div class="mail">
             <i class="fas fa-envelope-open-text"></i>
		     <input type="text" name="email" placeholder="email">
		  </div><br>
		 <div class="password">
		    	<i class="fas fa-lock"></i>
		       <input type="password" name="pass" placeholder="Password">
         </div><br>
         <div class="password">
         <i class="fas fa-building"></i>
         <input type="text" name="department_id" placeholder="department">
         </div>
         <br>
         <div class="password">
         <i class="fas fa-user"></i>
         <input type="number" name="role" placeholder="role">
         </div>
         <br>
         <div class="password">
         <i class="fas fa-user"></i>
         <input type="text" name="company" placeholder="companyname">
         </div>
		 <input type="submit" value="signup">
		</div>
		<h3 class="cross"><a href="home.php">x</a></h3>
   </div>
   <?php echo $msg; ?>
	</form>
</body>
</html>
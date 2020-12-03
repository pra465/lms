<?php
// require('db.inc.php');
// if($_SESSION['ROLE']==0){
// 	header('location:add_employee.php?id='.$_SESSION['USER_ID']);
// 	die();
// }
// if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id'])){
// 	$id=mysqli_real_escape_string($con,$_GET['id']);
// 	mysqli_query($con,"delete from department where id='$id'");
// }
// $res=mysqli_query($con,"select * from department order by id desc");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Employee leave managment system</title>
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e7a70a44f9.js" crossorigin="anonymous"></script>
</head>
<body>
        <div class="header">
           <video autoplay muted loop class="myVideo">
              <source src="assets/video.mp4" type="video/mp4">
           </video>
           <img src="./assets/logo.png">
         <div class="nav">
             <ul>
                 <li><a href="#">home</a></li>
                 <li><a href="#">about</a></li>
                 <li><a href="#">contact</a></li>
                 <li><div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <!-- <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome -->
                      <?php 
                    //   echo $_SESSION['USER_NAME']
                      ?>
                      <!-- </a> -->
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div></li>
            </div>
             </ul>
         </div>
         <h1>Employee Leave <br> Managment System</h1>
         <p>This is very easy to use.This lets you access employee attendance records<br> from any where.
            This platform empowers managers and the HR team to make quick<br> decisions because of the real-time resource availability information. </p>
              <a href="login.php"><button class="button1">Login</button></a>
              <a href="signup.html"><button class="button2">SignUp</button></a>
        </div>
    <div class="paper">
        <div class="text">
           <h1>No spreadsheets,<br> no paper.</h1><br>
            <p>When you request leave in Leave Dates, your manager is immediately <br>notified by email.<br><br>They can then approve or decline with just one click.<br><br>It’s fast and convenient.</p>
        </div>
        <video autoplay muted loop class="video2">
              <source src="./assets/paper.mp4" type="video/mp4">
          </video>
    </div>
    <div class="calendar">
        <img src="./assets/calendar.gif">
        <div class="text1">
           <h1>Personal leave calendars</h1><br>
            <p>Your staff can have their own logins to check how much <br>annual leave they have booked or taken through the year.<br><br>Staff can log in on the website or using our mobile apps on iOS or Android.</p>
        </div>
    </div>
    <h1>reasons why you need a leave management system:</h1>
    <div class="advantage">
      <div class="box1">
         <i class="fas fa-clock fa-3x"></i><br>
         <h2>Track overtime and time <br>off in lieu (TOIL)</h2><br>
         <p>You can record any time off in lieu earned. <br>This will then automatically add to the employee’s leave allowance.</p>
      </div>
      <div class="box2">
         <i class="fas fa-cog fa-3x"></i><br>
         <h2>Fully configurable</h2><br>
         <p>Add as many leave types and allowances as you need, customise staff <br>working schedules, import public holidays.<br> Leave Dates is very configurable<br> to suit your needs.</p>
      </div>
      <div class="box3">
         <i class="fas fa-cloud-upload-alt fa-3x"></i><br>
         <h2>Bulk uploads of employees,<br> leave and allowances</h2><br>
         <p>Migrating from a spreadsheet or legacy<br> system? No problem, we provide tools<br> for bulk uploading data. </p>
      </div>
    </div><br>
    <div class="advantage2">
        <div class="box4">
            <i class="fas fa-unlock fa-3x"></i><br>
            <h2>Privacy options</h2><br>
            <p>The great benefit of Leave Dates is the visibility<br> it gives you of leave and absence but we <br>also respect the right to privacy.</p>
        </div>
        <div class="box5">
            <i class="fas fa-user-lock fa-3x"></i><br>
            <h2>Secure data</h2><br>
            <p>Your data is held securely in an encrypted<br> database in the cloud. Say goodbye to<br> corrupted spreadsheets and lost data.</p>
        </div>
        <div class="box6">
            <i class="far fa-calendar-alt fa-3x"></i><br>
            <h2>Sync with Google Calendar<br> or Outlook</h2><br>
            <p>If you want to view your leave (or your team’s<br> leave) in your usual calendar then you can.</p>
        </div>
    </div>
    <footer>
        <div class="nav-foo">
             <ul>
                 <li><a href="#">home</a></li>
                 <li><a href="#">about</a></li>
                 <li><a href="#">contact</a></li>
             </ul>
         </div>
        <div>
            <p class="foot">Let's Connect!</p><br>
        </div>
        <div class="email">
            <input type="text" name="" placeholder="Type your e-mail here...">
            <button>join</button>
        </div>
        <div class="icon">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x icon1"></i></a>
            <a href="https://github.com/"><i class="fab fa-github fa-2x icon1"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x icon1"></i></a>
            <a href="https://in.pinterest.com/"><i class="fab fa-pinterest fa-2x icon1"></i></a>
        </div>
        <p class="copy">&copy 2020 copyright: project-2020</p>
    </footer>
</body>
</html>

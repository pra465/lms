<?php
   include './db.php';
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $operation = $_POST['operation'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $mail = $_POST['mail'];

      $s="UPDATE `leave_request` SET status='".$operation."' WHERE start_date='".$start."' and end_date='".$end."' and employee_mail='".$mail."'";  
      $result=mysqli_query($conn, $s);
      if ($result) {
        header("location:admindashboard.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        .logout{
            position:absolute;
            top:40px;
            right:20px;
        }
        body{
            text-align:center;
        }
        h1{
            letter-spacing:5px;
        }
        .card{
            text-align:left;
            width:80%;
            min-height:50px;
            box-shadow:0 0 3px gray;
            margin:auto;
            padding:10px;
            box-sizing:border-box;
        }
        .mail{
            font-size:20px;
        }
        .date{
            float:right;
            margin-left:10px;
        }
        form{
            display:inline;
        }
        form>input{
            display:none;
        }
        .status{
            background:gray;
            user-select:none;
            border:none;
            font-size:15px;
        }
    </style>
</head>
<body>
    <a href='./adminlogin.php' class='logout'>logout</a>
    <br>
    <h1>Admin Dashboard</h1>
    <?php
        include 'db.php';
        $sql = "SELECT * from leave_request where status='pending'"; 
        $res = $conn->query($sql);
		while($row=$res->fetch_assoc()){
            echo "<br>
            <div class='card'>
                <div class='mail'>".$row['employee_mail']."</div>
                <div class='date'>".$row['end_date']."</div>
                <div class='date'>".$row['start_date']."</div>
                <div class='reason'>".$row['reason']."</div><br>
                <form method='post'>
                    <input name='start' value='".$row['start_date']."'>
                    <input name='end' value='".$row['end_date']."'>
                    <input name='mail' value='".$row['employee_mail']."'>
                    <input name='operation' value='accepted'>
                    <button>accept</button>
                </form>
                <form method='post'>
                    <input name='start' value='".$row['start_date']."'>
                    <input name='end' value='".$row['end_date']."'>
                    <input name='mail' value='".$row['employee_mail']."'>
                    <input name='operation' value='rejected'>
                    <button>reject</button>
                </form>
            </div>";
        }
        echo "<hr>";
        $sql = "SELECT * from leave_request where status!='pending'"; 
        $res = $conn->query($sql);
		while($row=$res->fetch_assoc()){
            echo "<br>
            <div class='card'>
                <div class='mail'>".$row['employee_mail']."</div>
                <div class='date'>".$row['end_date']."</div>
                <div class='date'>".$row['start_date']."</div>
                <div class='reason'>".$row['reason']."</div><br>
                <button class='status'>".$row['status']."</button>
            </div>";
        }
    ?>
</body>
</html>
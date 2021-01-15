<?php
    session_start();
    include 'db.php';
    $employee_mail = $_SESSION['employee_mail'];
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $reason = $_POST['reason'];
        $status = "pending";
        $sql = "INSERT INTO leave_request VALUES ('".$employee_mail."','".$start_date."', '".$end_date."', '".$reason."','".$status."')";   
        if ($conn->query($sql) === TRUE) {
            header("location:profile.php");
        }
        else{
            echo "Something went wrong. Try again <a href='./profile.php'>here</a>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href='./css/profile-style.css' rel='stylesheet'>
    <style>
        .logout{
            position:absolute;
            top:30px;
            right:20px;
        }
        body{
            width:100vw;
            height:100vh;
            overflow:hidden;
            margin:0;
            padding:0;
        }
        h1{
            text-align:center;
            letter-spacing:5px;
        }
        .body>div{
            border:1px solid rgba(0,0,0,0.2);
            position:relative;
            width:50vw;
            height:90vh;
        }
        .body{
            display:flex;
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
        .result form{
            display:inline;
        }
        .result form>input{
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
    <a href='./login.php' class='logout'>logout</a>
    <br>
    <h1>Profile</h1>
    <div class="body">
        <div class="result">
            <?php
                include 'db.php';
                $sql = "SELECT * from leave_request where employee_mail='".$employee_mail."'"; 
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
        </div>
        <div class="request">
            <form action="./profile.php" method="post">
                <h3>Start Date</h3>
                <input type='date' name="start_date">
                <h3>End Date</h3>
                <input type='date' name="end_date">
                <h3>Reason</h3>
                <input type='text' name="reason">
                <br><br>
                <button>Submit</button>
            </form>
        
        </div>
    </div>
    
</body>
</html>
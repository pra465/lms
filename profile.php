<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $start_date = $_POST['start_date'];
        $end_date = $_POST['start_date'];
        $start_date = $_POST['start_date'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href='./css/profile-style.css' rel='stylesheet'>
</head>
<body>
    <h1>Profile</h1>
    <form>
        <h3>Start Date</h3>
        <input type='date'>
        <h3>End Date</h3>
        <input type='date'>
        <h3>Reason</h3>
        <input type='text'>
        <br><br>
        <button>Submit</button>
    </form>
</body>
</html>
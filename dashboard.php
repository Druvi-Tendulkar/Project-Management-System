<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('locationlogin.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Page</title>
    <style>
    *{
        background-color: #000000;
        color: coral;
    }
    h1{
        text-align: center;
        font-size: 50px;
    }
    h2{
        margin-left:83%;
    }
    button{
        align-items: center;
        border: 4px solid coral;
        background-color: black;
        color: coral;
        border-radius: 10px;
        padding: 30px;
        padding-bottom: 4%;
        width: 400px;
        height: 40px;
        text-align: center;
        margin: 30px auto;
        margin-left: 37%;
        cursor: pointer;
        font-size: 30px;
        position: static;
        margin-top: 30px;
        /* margin-bottom: 10px; */
    }
    </style>
</head>
<body>
    <div class="a">
        <h2>USER: <?php echo $_SESSION['username']; ?> </h2>
        <h1><u>DASHBOARD</u></h1>
        </div>
        <form action="addproj.html">
            <button type="Submit" class="container">ADD PROJECT</button>
        </form>
        <form action="view.php">
            <button type="Submit" class="container">VIEW PROJECT</button>
        </form>
        <form action="logout.php">
            <button type="Submit" class="container">LOGOUT</button>
        </form>
</body>
</html>


<!-- CREATE TABLE register(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(200), email_id VARCHAR(200), phoneno VARCHAR(200), gender VARCHAR(50), password VARCHAR(50), confirm_password VARCHAR(50));  -->








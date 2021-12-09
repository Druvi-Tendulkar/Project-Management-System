<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task-1');

$username = $_POST['username'];
$email_id = $_POST['email_id'];
$phoneno = $_POST['phone'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$q = "SELECT * FROM register WHERE username = '$username' OR  email_id = '$email_id'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "This Username or emailID already exists!!";
}
else{
    if($_POST['password'] == $_POST['confirm_password']){
        $qy = "INSERT INTO register(username, email_id, phoneno, gender, password, confirm_password) VALUES ('$username', '$email_id', '$phoneno', '$gender', '$password', '$confirm_password')";
        mysqli_query($con, $qy);
        header('location: login.html');
    }
    else{
        echo "confirm password failed!! Enter same password in the confirm password field";
    }   
}

?>
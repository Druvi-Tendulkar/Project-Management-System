<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task-1');

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM register WHERE username = '$username' AND  password = '$password'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;  //store username in session 
    // echo $_SESSION['username'];
    header('location: dashboard.php');
}
else{
    echo "login failed!! Check username and password";
}

?>


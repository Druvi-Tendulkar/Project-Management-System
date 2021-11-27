<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task1');

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * FROM register_login WHERE username = '$username' AND  password = '$password'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;  //store username in session 
    header('location: dashboard.html');
}
else{
    echo "login failed!! Check username and password";
}

?>


<?php
session_start();
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task-1');

// $username = $_POST['username'];
$projname = $_POST['projname'];
$client = $_POST['client'];
$technology = $_POST['technology'];
$desc = $_POST['desc'];
$type = $_POST['type'];
$status = $_POST['status'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

$user=$_SESSION['username'];
// $_SESSION['username'] = $username;

$_SESSION['projname'] = $projname;
$_SESSION['client'] = $client;
$_SESSION['technology'] = $technology;
$_SESSION['desc'] = $desc;
$_SESSION['type'] = $type;
$_SESSION['status'] = $status;
$_SESSION['startdate'] = $startdate;
$_SESSION['enddate'] = $enddate;


// $qu = "SELECT * FROM register WHERE username = $user";
// $que = mysqli_query($con, $qu);
// $row=mysqli_fetch_array($que);
// $id=$row["id"];

if($projname == NULL OR $client == NULL OR $technology == NULL OR $desc == NULL OR $type == NULL OR $status == NULL OR $startdate == NULL OR $enddate == NULL){
    echo "Fields cannot be empty";
}
else{
    $qy = "INSERT INTO add_project(username, proj_name, client, technology, proj_desc, type, status, start_date, end_date) VALUES ('$user','$projname', '$client', '$technology', '$desc', '$type', '$status', '$startdate', '$enddate')";
        mysqli_query($con, $qy);
        header('location: dashboard.php');
}

?>



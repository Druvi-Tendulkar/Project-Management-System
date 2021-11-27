<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task1');

$username1 = $_POST['username'];
$projname = $_POST['projname'];
$client = $_POST['client'];
$technology = $_POST['technology'];
$desc = $_POST['desc'];
$type = $_POST['type'];
$status = $_POST['status'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
// $id = mysqli_query($con, $a);

if($projname == NULL OR $client == NULL OR $technology == NULL OR $desc == NULL OR $type == NULL OR $status == NULL OR $startdate == NULL OR $enddate == NULL){
    echo "Fields cannot be empty";
}
else{
    $qy = "INSERT INTO add_project(username1, proj_name, client, technology, proj_desc, type, status, start_date, end_date) VALUES ('$username1','$projname', '$client', '$technology', '$desc', '$type', '$status', '$startdate', '$enddate')";
        mysqli_query($con, $qy);
        header('location: dashboard.html');
}

?>



<?php

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'task1');

$projname = $_POST['projname'];
$client = $_POST['client'];
$technology = $_POST['technology'];
$desc = $_POST['desc'];
$type = $_POST['type'];
$status = $_POST['status'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

if($projname == NULL OR $client == NULL OR $technology == NULL OR $desc == NULL OR $type == NULL OR $status == NULL OR $startdate == NULL OR $enddate == NULL){
    echo "Fields cannot be empty";
}
else{
    $qy = "INSERT INTO add_project(proj_name, client, technology, proj_desc, type, status, start_date, end_date) VALUES ('$projname', '$client', '$technology', '$desc', '$type', '$status', '$startdate', '$enddate')";
        mysqli_query($con, $qy);
        header('location: mainpage.html');
}

?>


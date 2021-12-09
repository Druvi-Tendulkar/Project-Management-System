<?php
session_start();
// require 'add_proj.php';
// session_register_('username');
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'task-1');

$user = $_SESSION['username'];
$qa="SELECT * FROM add_project WHERE username = '$user' ";
$query = mysqli_query($con, $qa);
$rowcount = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            background-color: black;
            color: coral;
            text-align: center;
        }
        table{
            margin:2px;
            width: 98%;
        }
        th{
            height: 100px;
            font-size: 18px;
            padding: 4px;
        }
        tr, td{
            height: 100px;
            text-align: center;
            font-size: 25px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1><u>VIEW PROJECTS</u></h1>
    <?php
    if($rowcount>0){
        ?>
<table border='2'>
    <tr>
        <th><h1>Useranme</h1></th>
        <th><h1>Project Name</h1></th>
        <th><h1>Client</h1></th>
        <th><h1>Technology</h1></th>
        <th><h1>Description</h1></th>
        <th><h1>Type</h1></th>
        <th><h1>Start Date</h1></th>
        <th><h1>End Date</h1></th>
    </tr>

<?php

for($i=1; $i<=$rowcount; $i++)
{
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
 
<tr>
<td><?php echo $row["username"] ?></td>
<td><?php echo $row["proj_name"] ?></td>
<td><?php echo $row["technology"] ?></td>
<td><?php echo $row["proj_desc"] ?></td>
<td><?php echo $row["type"] ?></td>
<td><?php echo $row["status"] ?></td>
<td><?php echo $row["start_date"] ?></td>
<td><?php echo $row["end_date"] ?></td>
</tr> 

<?php
}
    }
else{
    echo "NO PROJECTS ADDED YET!!";
}
?>



</table>
</body>
</html>

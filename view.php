
<?php
session_start();
session_register_('username');
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, 'task1');

if($_SESSION['username']==true)
{
    echo "welcome"." ".$_SESSION['username'];
}

// $query=mysql_query("SELECT * FROM add_proj");
// $rowcount=mysql_num_rows($query);

$username = $_SESSION['username'];
echo $username;
$qr= "SELECT * FROM register_login WHERE username='$username'";
$query1 = mysqli_query($con, $qr);
$row1= mysqli_fetch_array($con, $query1);
$id=$row1["id"];
$qy=  "SELECT * FROM add_project WHERE username='$username";
$query=mysqli_query($con, $qy);
$rowcount=mysqli_num_rows($query);
?>

<table>
    <tr>
        <th>Useranme</th>
        <th>Project Name</th>
        <th>Client</th>
        <th>Technology</th>
        <th>Description</th>
        <th>Type</th>
        <th>Start Date</th>
        <th>End Date</th>
    </tr>

<?php

for($i=1; $i<=$rowcount; $i++)
{
    $row=mysqli_fetch_array($con,$query);
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
?>

</table>


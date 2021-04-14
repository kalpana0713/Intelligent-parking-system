<?php
include("dbconnect.php");

$emailid=$_GET['emailid'];

$sql="delete from feedback where emailid='$emailid'";
$status = mysqli_query($con,$sql);
if($status)
{
header("location:extract-feedback.php");
}
?>
<?php
include("dbconnect.php");

$emailid=$_POST['emailid'];
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$subject=$_POST['subject'];
$description=$_POST['description'];
$sql="update feedback set name='$name',mobileno='$mobileno',subject='$subject',description='$description' where emailid='$emailid'";
$status= mysqli_query($con,$sql);
if($status)
{
header("location:extract-feedback.php");
}
?>
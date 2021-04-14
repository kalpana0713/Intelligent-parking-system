<?php
$con = mysqli_connect("localhost","root","");
if(!$con)
{
die("Database Error");
}
$dbstatus = mysqli_select_db($con,"php1");
if(!$dbstatus)
{
die("Database Not Found");
}
?>
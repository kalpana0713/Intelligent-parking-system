<?php
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$subject=$_POST['subject'];
$description=$_POST['description'];

//1- Establish Connection with MYSQL server
$con = mysqli_connect("localhost","root","");
if(!$con)
{

echo "Connection Error";

}
//2-Select Database
$dbstatus = mysqli_select_db($con,"php1");
if(!$dbstatus)
{

echo "Database Not Found";

}

//3-Write SQL Query
$sql = "insert into feedback values('$name','$emailid','$mobileno','$subject','$description')";

//4-send and execute sql query
$status = mysqli_query($con,$sql);

//5-process result
if($status)
{

//echo "Feedback sent...";
header("location:extract-feedback.php");
}
else
{
 
echo "Fail: Try Again....";

}

//6-Close connections
mysqli_close($con);

?>
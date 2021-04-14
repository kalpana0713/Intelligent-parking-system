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
$sql="select * from feedback";
$result=mysqli_query($con,$sql);
$totalrecord=mysqli_num_rows($result);
$recordperpage=5;
$page=ceil($totalrecord/$recordperpage);

if(isset($_GET['pageno']))
{
$pageno=$_GET['pageno'];
}
else
{
$pageno=1;
}
$start=($pageno-1)*5;

$sql1="select * from feedback limit $start,$recordperpage";
$result1=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result1);
while($row)
{
$name = $row['name'];
$emailid = $row['emailid'];
$mobileno = $row['mobileno'];
$subject = $row['subject'];
$description = $row['description'];
echo "$name-- $emailid-- $mobileno-- $subject-- $description <br/>";
$row = mysqli_fetch_array($result1);
}

for($i=1;$i<=$page;$i++)
{
?>
<a href="pagination.php?pageno=<?php echo $i; ?>"><?php echo $i ?></a>
<?php
}
?>
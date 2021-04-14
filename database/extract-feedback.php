<?php
include("dbconnect.php");
?>

<html>
<head>
<script language="javascript">
function check()
{
var status = confirm("Do you want to delete?");
if(status)
{
return true;
}
else
{
return false;
}
}
</script>
</head>
<body>
<?php

$sql = "select * from feedback";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
echo"Total Record : $count<br/>";
?>
<table border="1" cellspacing="0" cellpadding="7">
<tr>
<th>Name</th>
<th>Email ID</th>
<th>Mobile No</th>
<th>Subject</th>
<th>Description</th>
<th colspan="2">Action</th>
</tr>
<?php
$row = mysqli_fetch_array($result);
while($row)
{
$name=$row['name'];
$emailid=$row['emailid'];
$mobileno=$row['mobileno'];
$subject=$row['subject'];
$description=$row['description'];
?>
<tr>
<td><?php echo $name;?></td>
<td><?php echo $emailid;?></td>
<td><?php echo $mobileno;?></td>
<td><?php echo $subject;?></td>
<td><?php echo $description;?></td>
<td><a href="edit.php?emailid=<?php echo $emailid; ?>">Edit</a></td>
<td><a href="delete.php?emailid=<?php echo $emailid; ?>" onclick="return check()">Delete</a></td>
</tr>
<?php
$row = mysqli_fetch_array($result);
}
mysqli_close($con);
?>

</table>
<br/>
<a href="feedback.html">Insert Feedback</a>
</body>
</html>

<?php

include("dbconnect.php");
$emailid=$_GET['emailid'];

$sql="select * from feedback where emailid='$emailid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$name=$row['name'];
$mobileno=$row['mobileno'];
$subject=$row['subject'];
$description=$row['description'];
?>
<form action="update.php" method="post">
<input type="hidden" name="emailid" value="<?php echo$emailid; ?>">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo$name;?>"/></td>
</tr>

<tr>
<td>Mobile NO:</td>
<td><input type="text" name="mobileno" value="<?php echo$mobileno;?>"/></td>
</tr>

<tr>
<td>Subject:</td>
<td><input type="text" name="subject" value="<?php echo$subject;?>"/></td>
</tr>

<tr>
<td>Description:</td>
<td><textarea name="description"><?php echo$description;?></textarea></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Update"/></td>
</tr>
</table>
</form>






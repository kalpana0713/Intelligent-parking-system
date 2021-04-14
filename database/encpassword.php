<?php
$password="abc";
$encpassword1=md5($password);
$encpassword2=sha1($password);
$encpassword3=crc32($password);

echo $encpassword1;
echo "<br/>";
echo $encpassword2;
echo "<br/>";
echo $encpassword3;

$encpassword4 = base64_encode($password);
echo "<br/>";
echo $encpassword4;
$password5 = base64_decode($encpassword4);
echo "<br/>"
echo $password5;
?>
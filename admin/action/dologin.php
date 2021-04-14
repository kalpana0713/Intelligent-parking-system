<?php
    include_once('../../dbconnect.php');
    //echo 2;exit;
    if(isset($_POST['btnSubmit'])){
		$username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM admin  WHERE username = '$username' AND password = '$password' ";
        $result =  mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        if($count){
        	$_SESSION['admin'] = $username;
        	header("Location:../welcome.php");
        }else{
            $_SESSION['msg'] = "Inavlid username / password";
        	header("Location:../index.php");
        }
	}
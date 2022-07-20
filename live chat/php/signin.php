<?php
include "connect.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$que = mysqli_query($conn,"SELECT * FROM `user_info` WHERE `email` = '$email'");
if (mysqli_num_rows($que)>0) {
	$ftch = mysqli_fetch_assoc($que);
     $password = md5($password);
	if ($email == $ftch['email'] && $password == $ftch['password']) {
		$_SESSION['unique_id'] = $ftch['unique_id'];
		 echo "success";
	}else{
		echo "Password or email not match";

	}
}

?>
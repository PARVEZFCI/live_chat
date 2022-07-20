<?php
session_start();
include_once 'connect.php';
if (isset($_SESSION['unique_id'])) {

	$outgoing_id = $_POST['outgoing_id'];
	$incoming_id = $_POST['incoming_id'];
	$message = $_POST['message'];

	if (!empty($message)) {
		$insert = mysqli_query($conn,"INSERT INTO `messages` (`outgoing_id`,`incoming_id`,`msg`) VALUES ('$outgoing_id','$incoming_id','$message')") OR die();
		
	}else{
		echo "Msg";
	}
}else{
	//header('../login.php');
	echo "abc";
}
?>
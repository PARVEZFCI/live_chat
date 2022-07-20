<?php 


session_start();

include "connect.php";
/*`unique_id``fname``lname``email``password``image``status*/
$fname =$_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

	$status = "active now";
	$unique_id = rand(time(),100000000);
	$password = md5($password);

	$uploadFolder = '../adminimage/';
    $imageTmpName = $_FILES['image']['tmp_name'];
	$imageName = $_FILES['image']['name'];
	$result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

	$succ = mysqli_query($conn,"INSERT INTO `user_info` (`unique_id`,`fname`,`lname`,`email`,`password`,`image`,`status`) VALUES ('$unique_id','$fname','$lname','$email','$password','$imageName','$status')");
	if ($succ) {
		$que = mysqli_query($conn,"SELECT * FROM `user_info` WHERE `email`='$email'");
		if (mysqli_num_rows($que)>0) {
			$ftch = mysqli_fetch_assoc($que);

			$_SESSION['unique_id'] = $ftch['unique_id'];
			echo "Success";
		}
	}
}else{
	echo "required field";
}


?>
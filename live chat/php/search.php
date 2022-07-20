<?php
include_once 'connect.php';
$searchData = $_POST['searchTerm'];
$sql = mysqli_query($conn,"SELECT * FROM `user_info` WHERE fname LIKE '%{$searchData}%' OR lname LIKE '%{$searchData}%'");
$err = "";
if(mysqli_num_rows($sql)>0) {
     while ($ftch = mysqli_fetch_assoc($sql)) {
    	$err .='<a href="#">
					<div class="content">
						<img src="img.png" alt="">
						<div class="details">
							<span>'.$ftch['fname']." ".$ftch['lname'].'</span>
							<p>This is test message</p>
						</div>
					</div>
					<span class="status-dot">
						<i class="fa fa-circle"></i>
					</span>
				</a>';
    }
}else{
	$err .="No user Found ";
}
echo $err;
?>
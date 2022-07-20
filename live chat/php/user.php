<?php
include_once 'connect.php';
session_start();

$sql = mysqli_query($conn,"SELECT * FROM `user_info`");

$output ="";

if (mysqli_num_rows($sql)==1) {
	$output.="No user Available";
}elseif (mysqli_num_rows($sql)>0) {
    
    while ($ftch = mysqli_fetch_assoc($sql)) {
    	$msg_que = mysqli_query($conn,"SELECT * FROM `messages` WHERE $ftch['unique_id'] = '' ")
    	$output .='<a href="chat.php?user_id='.$ftch['unique_id'].'">
					<div class="content">
						<img src="adminimage/'.$ftch['image'].'" alt="">
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
}
echo $output;

?>
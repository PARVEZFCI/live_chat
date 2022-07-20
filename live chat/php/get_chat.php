<?php
session_start();
include_once 'connect.php';
if (isset($_SESSION['unique_id'])) {

	$outgoing_id = $_POST['outgoing_id'];
	$incoming_id = $_POST['incoming_id'];
	$output ="";

	$que = mysqli_query($conn,"SELECT * FROM `messages`
		
	 	  WHERE (`outgoing_id`='$outgoing_id' AND `incoming_id`='$incoming_id') OR (`outgoing_id`='$incoming_id' AND `incoming_id`='$outgoing_id') ORDER BY `id` ASC");
        
        if (mysqli_num_rows($que)>0) {
        	while ($data_ftch = mysqli_fetch_assoc($que)) {
        		if ($data_ftch['outgoing_id']===$outgoing_id) {
        			$output .='<div class="chat outgoing">
					<div class="details">
						<p>'.$data_ftch['msg'].'</p>
					</div>
				</div>';
        		}else{
        			$output .='<div class="chat incoming">
					<img src="img.png" alt="">
					<div class="details">
						<p>'.$data_ftch['msg'].'</p>
					</div>
				</div>';
        		}
        		
        	}
        	echo $output;
        	
        }

	
}else{
	//header('../login.php');
	echo "abc";
}
?>
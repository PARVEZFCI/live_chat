<?php
session_start();
include_once 'php/connect.php';
if (!isset($_SESSION['unique_id'])) {
	
	header("location:login.php");

	
}

?>

<?php
include_once 'header.php';
?>
<body>
	
	<div class="wrapper">
		<section class="chat-area">
			<header>
				<?php
                    $user_id = $_GET['user_id'];
		           $sql = mysqli_query($conn,"SELECT * FROM `user_info` WHERE `unique_id`='$user_id'");
					if (mysqli_num_rows($sql)>0) {  
						$ftch = mysqli_fetch_assoc($sql);
						

						}  
                  ?>

				<a href="user.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
				<img src="img.png" alt="" style="object-fit:cover">
					<div class="details">
						<span><?php echo $ftch['fname'] ." ". $ftch['lname'] ?></span>
						<p><?=$ftch['status']?></p>
					</div>
					<div class="header-icon">
						<a href="#" class="phone"><i class="fa fa-phone"></i></a>
						<a href="#" class="video"><i class="fa fa-video-camera"></i></a>
						<a href="#" class="info"><i class="fa fa-info-circle"></i></a>
					</div>
			</header>
			<div class="chat-box">
				
				
			</div>
			<form action="#" class="typing-area">
				<input type="hidden" name="outgoing_id" type="text" value="<?php echo  $_SESSION['unique_id'] ?>" name="">
				<input type="hidden" name="incoming_id" type="text" value="<?php echo  $user_id ?>" name="">
				<input type="text" class="input_field" name="message" placeholder="Type a message here...">
				<button><i class="fa fa-paper-plane"></i></button>
			</form>	
		</section>
	</div>

	
	<script src="javascript/chat.js"></script>

</body>
</html>
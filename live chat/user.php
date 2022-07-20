<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
	
	header("location:login.php");

	$unique_id = $_SESSION['unique_id'];
}

?>
<?php
include_once 'header.php';
?>
<?php

include_once 'php/connect.php';

$sql = mysqli_query($conn,"SELECT * FROM `user_info` WHERE `unique_id`={$_SESSION['unique_id']}");
if (mysqli_num_rows($sql)>0) {
	  
	 $ftch = mysqli_fetch_assoc($sql);

}

?>
<body>
	
	<div class="wrapper">
		<section class="user">
			<header>
				<div class="content">
					<img src="adminimage/<?=$ftch['image'] ?>" alt="">
					<div class="details">
						<span><?=$ftch['fname']?> <?=$ftch['lname']?></span>
						<p><?=$ftch['status']?></p>
					</div>
				</div>
				<a href="php/logout.php" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select an user to start Chat</span>
				<input type="text" placeholder="Enter Name To Search...">
				<button><i class="fa fa-search"></i></button>
			</div>
			<div class="user-list">
				
				
			</div>
		</section>
	</div>

<script src="javascript/user.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
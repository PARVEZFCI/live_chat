<?php
session_start();

if (isset($_SESSION['unique_id'])) {
	//echo "header(location:user.php)";
	header("location:user.php");
}

?>

<?php
include_once 'header.php';
?>
<body>
	
	<div class="wrapper">
		<section class="form signup">
			<header>Live Chat</header>
			<form action="#">
				<div class="error-text"> This is an error message!</div>
				<div class="name-details">
					<div class="field input">
						<label>First Name</label>
						<input type="text" name="fname" placeholder="First Name" required="">
					</div>
					<div class="field input">
						<label>Last Name</label>
						<input type="text" name="lname" placeholder="Last Name" required="">
					</div>
				</div>	
					<div class="field input">
						<label>Email Email</label>
						<input type="text" name="email" placeholder="Enter Your Email" required="">
					</div>
					
					<div class="field input">
						<label>Password</label>
						<input type="password" name="password" placeholder="Enter new Password" required="">
						<i class="fa fa-eye"></i>
					</div>
					<div class="field image">
						<label>Select Image</label>
						<input type="file" name="image">
					</div>
					<div class="field button">
						<input type="Submit" value="Continue To Chat">
					</div>
			</form>
			<div class="link">Already signed up? <a href="login.php">Login Now</a></div>
		</section>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>
</body>
</html>
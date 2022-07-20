<?php
session_start();
if (isset($_SESSION['unique_id'])) {

    header("location:user.php");
}
?>

<?php
include_once 'header.php';
?>
<body>
	
	<div class="wrapper">
		<section class="form login">
			<header>Live Chat</header>
			<form action="#">
				<div class="error-text"> This is an error message!</div>
					<div class="field input">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Your Email" name="email" required="">
					</div>
					<div class="field input">
						<label>Password</label>
						<input type="password" placeholder="Enter your Password" name="password" required="">
						<i class="fa fa-eye"></i>
					</div>
					<div class="field button">
						<input type="Submit" value="Continue To Chat">
					</div>
			</form>
			<div class="link">Not Yet signed up? <a href="index.php">Signup Now</a></div>
		</section>
	</div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signin.js"></script>

</body>
</html>
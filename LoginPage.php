<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="LoginPageStyle.css">
</head>
<body>
	<!-- <h1 class="title">INSURANCE <h1 class="manage">MANAGEMENT </h1> SYSTEM</h1> -->
	<!-- <span>INSURANCE
	<span>MANAGEMENT</span>
	<span>SYSTEM</span> -->

	<h1>INSURANCE<br><span class="special-word">MANAGEMENT</span>SYSTEM</h1>

	<form action="Login.php" method="POST">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
			<?php  } ?>
		<label>UserName</label><input type="text" name="username">
		<label>Password</label><input type="password" name="password">
		<input type="submit" name="submit" value="LOGIN" class="login-btn">
	</form>

</body>
</html>
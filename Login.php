<?php  
include "db_connect.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: LoginPage.php?error=username is required");
		exit();
	}elseif (empty($password)) {
		header("Location: LoginPage.php?error=password is required");
		exit();
	}else {
		$sql = "SELECT * FROM  tester WHERE username='$username' AND  password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			
		}else {
			header("Location: LoginPage.php?error=Incorrect username or password");
		exit();
		}
	}
	
} else {
	header("Location: LoginPage.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="DashboardStyle.css">
</head>
<body>

	<input type="checkbox" id="check">
	<header>
		 <label for="check">
		 	<i class="fa fa-bars" id="sidebar_btn"></i>
       		
    	 </label>
		<div class="left_area">
			<h3>I<span class="special_letter">M</span>S</h3>
		</div>
		<div class="right_area">
			<a href="LoginPage.php" class="logout_btn">Logout</a>
		</div>
	</header>

	<div class="sidebar">
		<center>
			<img src="admin.png" class="profile_img">
			<h4>Admin 1</h4>
		</center>
		<a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
		<a href="#"><i class="fa fa-car"></i><span>Vehicle</span></a>
		<a href="#"><i class="fa fa-user"></i><span>Client</span></a>
		<a href="#"><i class="fa fa-clipboard"></i><span>Insurance</span></a>
		<a href="#"><i class="fa fa-info-circle"></i><span>Info</span></a>
	</div>

		<div class="content">
			<h2>NO CONTENT YET</h2>
		</div>

</body>
</html>
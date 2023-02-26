<?php

include 'connection/config.php';

error_reporting(0);
session_start();

require 'header.php';
if (isset($_SESSION['email'])) {
	header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$owner = $_POST['owner'];
	$type = $_POST['type'];
	$year_establish = $_POST['year_establish'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	$webpage = $_POST['webpage'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);



	if ($password == $cpassword) {
		$sql = "SELECT * FROM employers WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO employers (name, owner, type, year_establish, phone_number, address, webpage, email, password )
					VALUES ('$name', '$owner', '$type','$year_establish','$phone_number', '$address','$webpage','$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";

				header("Refresh:0");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	} else {

		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handy Hunt | Employer</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style-for-login.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<style>
		sup {
			color: red;
		}
	</style>
</head>

<body>
	<div class="container">
		<form method="POST" class="card p-4 col-md-6 m-5">
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Company Name <sup>*</sup></p>
					<input type="text" class="form-control" name="name" required>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Company Owner <sup>*</sup></p>
					<input type="text" class="form-control" name="owner" required>
				</div>
				<div class="col-md">
					<p class="fw-bold">Company type <sup>*</sup></p>
					<select class="form-control" name="type" required>
						<option selected disabled>Select company type</option>
						<option value="Option 1">Option 1</option>
						<option value="Option 2">Option 2</option>
						<option value="Option 3">Option 3</option>
						<option value="Option 4">Option 4</option>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Address</p>
					<input type="text" class="form-control" name="address">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Year established <sup>*</sup></p>
					<input type="month" class="form-control" name="year_establish" required>
				</div>
				<div class="col-md">
					<p class="fw-bold">Phone number <sup>*</sup></p>
					<input type="tel" class="form-control" name="phone_number" required>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Company webpage</p>
					<input type="text" class="form-control" name="webpage">
				</div>
			</div>
			<hr>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Email address <sup>*</sup></p>
					<input type="email" class="form-control" name="email" required>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Password <sup>*</sup></p>
					<input type="password" class="form-control" name="password" required>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md">
					<p class="fw-bold">Confirm password <sup>*</sup></p>
					<input type="password" class="form-control" name="cpassword" required>
				</div>
			</div>
			<div class="row mb-3">

				<button name="submit" class="btn btn-primary btn-block">Register</button>
			</div>
		</form>
	</div>

	<?php
	require 'footer.php';
	?>
</body>

</html>
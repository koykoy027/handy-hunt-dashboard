<?php

include 'connection/config.php';

error_reporting(0);

session_start();

require 'header.php';
if (isset($_SESSION['email'])) {
	header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$member_number = $_POST['member_number'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);



	if ($password == $cpassword) {

		$sql = "SELECT * FROM employees WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		$sqlEmployer = "SELECT * FROM employers WHERE email='$email'";
		$resultEmployer = mysqli_query($conn, $sqlEmployer);

		$sqlMember = "SELECT * FROM employees WHERE member_number='$member_number'";
		$resultMember = mysqli_query($conn, $sqlMember);



		if (!$result->num_rows > 0 and !$resultEmployer->num_rows > 0) {
			if (!$resultMember->num_rows > 0) {
				$sql = "INSERT INTO employees (member_number,firstname, lastname, gender, birthday, address, email, password)
					VALUES ('$member_number','$firstname', '$lastname', '$gender', '$birthday', '$address', '$email', '$password')";
				$result = mysqli_query($conn, $sql);

				if ($result) {
					echo "<script>alert('Wow! User Registration Completed.')</script>";

					header("Refresh:0");
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";
				}
			} else {
				echo "<script>alert('Member number already exist.')</script>";
			}
		} else {
			echo "<script>alert('Email already exist.')</script>";
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
		.box {
			width: 100%;
			min-height: 90%;

			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
			background-position: center;
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		sup {
			color: red;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md">

			</div>
			<form method="POST" class="card p-4 col-md-6 m-5">
				<div class="row mb-3">
					<div class="col-md">
						<p class="fw-bold">Member number<sup>*</sup></p>
						<input type="text" class="form-control" name="member_number" required>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md">
						<p class="fw-bold">Firstname<sup>*</sup></p>
						<input type="text" class="form-control" name="firstname" required>
					</div>
					<div class="col-md">
						<p class="fw-bold">Lastname<sup>*</sup></p>
						<input type="text" class="form-control" name="lastname" required>
					</div>

				</div>
				<div class="row mb-3">
					<div class="col-md">
						<p class="fw-bold">Gender <sup>*</sup></p>
						<Select class="form-control" name="gender">
							<option selected disabled>Select Gender</option>
							<option value="Prefer not to Say">Prefer not to Say</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</Select>
					</div>
					<div class="col-md">
						<p class="fw-bold">Birthday <sup>*</sup></p>
						<input type="date" class="form-control" name="birthday" required>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md">
						<p class="fw-bold">Address</p>
						<input type="text" class="form-control" name="address">
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
	</div>

	<?php
	require 'footer.php';
	?>
</body>

</html>
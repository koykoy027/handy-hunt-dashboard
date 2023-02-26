<?php

require 'connection/config.php';
require 'header.php';

session_start();
error_reporting(0);

if (isset($_SESSION['email'])) {

	header("Location: profile.php");
}



if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM employers WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	$sqlEmployees = "SELECT * FROM employees WHERE email='$email' AND password='$password'";
	$resultEmployees = mysqli_query($conn, $sqlEmployees);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['company_id'] = $row['company_id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['owner'] = $row['owner'];
		$_SESSION['type'] = $row['type'];
		$_SESSION['year_establish'] = $row['year_establish'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['phone_number'] = $row['phone_number'];
		$_SESSION['webpage'] = $row['webpage'];
		$_SESSION['email'] = $row['email'];

		header("Location: employer-profile.php");
	} else if ($resultEmployees->num_rows > 0) {
		$row = mysqli_fetch_assoc($resultEmployees);
		$_SESSION['member_number'] = $row['member_number'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['birthday'] = $row['birthday'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['email'] = $row['email'];


		header("Location: employee-profile.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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




	<div class="container my-5">

		<div class="col-md-6">
			<form method="POST" class="card">
				<div class="card-header">
					Login
				</div>
				<div class="card-body px-5">
					<div class="row">
						<p class="fw-bold">Email</p>
						<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
					</div>

					<div class="row">
						<p class="fw-bold">Password</p>
						<input type="password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
					</div>


					<br>
					<button name="submit" class="btn btn-primary">Login</button>
				</div>




			</form>
		</div>
	</div>


	<?php
	require 'footer.php';
	?>
</body>

</html>
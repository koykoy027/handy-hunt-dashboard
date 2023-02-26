<?php
// session_start();
error_reporting(0);

?>
<link rel="icon" href="img/AMS Logo.png" type="image/x-icon">
<link rel="stylesheet" href="css/fontawesome-free-6.0.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-5.1.3-dist/css/bootstrap.css">	 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- DELTE -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="script.js"></script>

<nav class="navbar navbar-expand-lg bg-dark sticky-top navbar-dark">
	<div class="container">
		<a id="footer-branding" class="navbar-brand" href="index.php" title="Handy Hunt">
			Handy Hunt
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
				<li class="nav-item"><a class="nav-link me-5" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link me-5" href="job-lists.php">Job Lists</a></li>
				<!-- <li class="nav-item"><a class="nav-link me-5" href="employers.php">Employers</a></li> -->
				<li class="nav-item"><a class="nav-link me-5" href="">Find Employee</a></li>
				<li class="nav-item"><a class="nav-link me-5" href="Contact us.php">Contact us</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user me-2"></i><?php echo $_SESSION['name']; ?> <?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="employer-profile.php"><i class="fas fa-user me-2"></i>Profile</a></a></li>
						<li><a class="dropdown-item" href="request appointment.php"><i class="fa-solid fa-calendar-check"></i> Appointment</a></a></li>
						<li><a class="dropdown-item" href="registered alumni.php"><i class="fa-solid fa-users"></i> Alumni Connect</a></a></li>
						<li><a class="dropdown-item" href="profile-update.php"><i class="fa-solid fa-wrench"></i> Settings</a></a></li>
						<li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></a></li>
					</ul>
				</li>


			</ul>



		</div>
	</div>
</nav>
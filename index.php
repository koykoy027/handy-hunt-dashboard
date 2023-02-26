<head>
	<title>Handy Hunt</title>

</head>

<?php
session_start();
require 'connection/contact-insert.php';


if (!isset($_SESSION['email'])) {
	require 'header.php';
} else {
	require 'headerLogin.php';
}


?>

<body>

	<section class="masthead bg-dark p-5 text-white text-center">

		<h1 class="py-5">Your Bright Future Starts Here Now</h1>
		<h3 class="">Finding your next job or career on Handy Hunt</h3>

	</section>

	<section class="container p-5">
		<h3 class="text-center mb-4">RANDOM COMPANIES</h3>

		<div class="row">
			<div class="card col-md p-3 text-center mx-3">
				<img src="https://via.placeholder.com/10" />
				<p>Michael And Rose Trading</p>
				<button class="btn btn-outline-secondary btn-sm">
					View Company
				</button>
			</div>
			<div class="card col-md p-3 text-center mx-3">
				<img src="https://via.placeholder.com/10" />
				<p>Michael And Rose Trading</p>
				<button class="btn btn-outline-secondary btn-sm">
					View Company
				</button>
			</div>
			<div class="card col-md p-3 text-center mx-3">
				<img src="https://via.placeholder.com/10" />
				<p>Michael And Rose Trading</p>
				<button class="btn btn-outline-secondary btn-sm">
					View Company
				</button>
			</div>




		</div>

	</section>

	<section class="p-5 bg-secondary">
		<h3 class="text-center mb-4 text-white">LATESTS JOB</h3>

		<div class="container">
			<div class="row">
				<div class="card col-md p-3 text-center mx-3">
					<img src="https://via.placeholder.com/10" />
					<p>Michael And Rose Trading</p>
					<button class="btn btn-outline-secondary btn-sm">
						View Company
					</button>
				</div>
				<div class="card col-md p-3 text-center mx-3">
					<img src="https://via.placeholder.com/10" />
					<p>Michael And Rose Trading</p>
					<button class="btn btn-outline-secondary btn-sm">
						View Company
					</button>
				</div>
				<div class="card col-md p-3 text-center mx-3">
					<img src="https://via.placeholder.com/10" />
					<p>Michael And Rose Trading</p>
					<button class="btn btn-outline-secondary btn-sm">
						View Company
					</button>
				</div>




			</div>
		</div>

	</section>







	<?php
	include 'footer.php';
	?>



</body>
<head>
	<title>Handy Hunt | Employers</title>
</head>
<?php
session_start();
require 'connection/config.php';

if (!isset($_SESSION['email'])) {
	require 'header.php';
} else {
	require 'headerLogin.php';
}
?>
<style>
	td,
	th {
		/* font-size: small; */
	}

	td {
		text-decoration: none;
	}
</style>
<section class="mb-5" style="background: url('https://raw.githubusercontent.com/JulianLaval/canvas-particle-network/master/img/demo-bg.jpg'); background-repeat: no-repeat; background-size: cover;background-position: bottom: auto; border-bottom: 2px solid #f36601;">
	<div class="container">
		<div class="home-section-1-circle">
			<h1 class="fs-1 fw-bolder">Job<span style="color:#f36601;"> Employer</span></h1>
			<p class="lead fs-6">
				From 2019 - 2021 CSD Graduates of University of Caloocan city will be display here.
			</p>
		</div>
	</div>
</section>
<div class="container">
	<h3>Job Employers</h3>
	<div class="overflow-hidden">
		<hr>

		<table class="table table-borderless table-striped">
			<thead style="background:none;">
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody style="background:none;">
				<?php
				require 'connection/config.php';
				$company_id = $_SESSION['company_id'];
				$id = $_SESSION['id'];

				$query = "SELECT * FROM job_posts WHERE status='1' ORDER BY created_at DESC ";
				$query_run = mysqli_query($conn, $query);
				if (mysqli_num_rows($query_run) > 0) {
					foreach ($query_run as $row) {
				?>
						<tr>
							<td>
								<div class="row p-2">
									<div class="col-md-2">
										<img src="https://via.placeholder.com/150" style="border-radius: 50%" />
									</div>
									<div class="col-md">
										<div class="d-flex justify-content-between">
											<a href='employer-profile-visit?id=<?php echo $row['id'] ?>' target="_blank" class="text-decoration-none text-black fw-bold">
												<?= $row['name']; ?>
											</a>

										</div>
										<small class="text-black"><?= $row['created_at']; ?></small>
										<hr>
										<p><?= $row['description']; ?></p>
										<!-- <p class="fw-bold">Apply here</p>
										<p><?= $row['email']; ?></p> -->

										<div class="row">
											<div class="col-md">
												<span class="fw-bold">
													Job Type
												</span>
												<br>
												<!-- job type -->

												<?php
												if ($row['job_type'] == "Full Time") {
												?>
													<p class="badge bg-primary"><?= $row['job_type']; ?></p>
													<p class="badge bg-success"><?= $row['time']; ?> HOURS</p>
												<?php
												} else if ($row['job_type'] == "Full Time, Part Time") {
												?>
													<p class="badge bg-success"><?= $row['job_type']; ?></p>
													<p class="badge bg-warning"><?= $row['time']; ?> HOURS</p>
												<?php
												} else {

												?>
													<p class="badge bg-warning"><?= $row['job_type']; ?></p>
													<p class="badge bg-primary"><?= $row['time']; ?> HOURS</p>
												<?php
												}
												?>
											</div>
											<div class="col-md">
												<span class="fw-bold">
													Location
												</span>
												<br>
												<a class="text-decoration-none text-black" href="https://www.google.com/maps/place/<?= $row['address']; ?>" target="_blank">
													<i class="bi bi-geo-alt-fill" style="color: red"></i> <?= $row['address']; ?>
													<br>
												</a>
											</div>
										</div>
										<br>
									</div>
								</div>
							</td>
						</tr>
					<?php
					}
				} else {
					?>
					<tr>
						<h6 colspan="6" class="text-center">No post found</h6>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>

		<hr>
		<script type="text/javascript">
			$(document).ready(function() {
				$('table').DataTable({
					// searching: false,
					//paginate: false,



				})
			});
		</script>
	</div>
</div>
<?php
require 'footer.php';
?>
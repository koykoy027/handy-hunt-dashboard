<?php

session_start();

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
} else {
  require 'headerLogin.php';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $_SESSION['name']; ?> | Applicants
  </title>
</head>
<style>
  sup {
    color: red;
  }
</style>

<body>





  <div class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <div class=" card mb-3">
          <div class="card-body flex justify-content-center text-center">
            <img src="https://via.placeholder.com/200" class="my-2" style="border-radius: 50%" />

            <h4><?php echo $_SESSION['name']; ?></h4>
            <span><?php echo $_SESSION['type']; ?></span>
          </div>
        </div>

        <!-- CONTACT -->
        <div class=" row mb-3 card-body gap-2">
          <a href="employer-profile.php" class="btn btn-outline-primary btn-block btn-sm">Profile</a>
          <a href="employer-applicants.php" class="btn btn-primary btn-block btn-sm">Applicants</a>
          <a href="employer-job-posted.php" class="btn btn-outline-primary btn-block btn-sm">Job Posted</a>
          <a href="employer-settings.php" class="btn btn-outline-primary btn-block btn-sm">Account Settings</a>
        </div>
      </div>

      <!-- questions -->
      <div class="col-md">
        <div class="card mb-3">
          <div class="card-body">
            <h6>Applicants</h6>
          </div>
        </div>
      </div>

    </div>
  </div>

  </div>






































  <?php
  require 'footer.php';
  ?>







</body>

</html>
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
    <?php echo $_SESSION['name']; ?>
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
          <a href="employer-profile.php" class="btn btn-primary btn-block btn-sm">Profile</a>
          <a href="employer-applicants.php" class="btn btn-outline-primary btn-block btn-sm">Applicants</a>
          <a href="employer-job-posted.php" class="btn btn-outline-primary btn-block btn-sm">Job Posted</a>
          <a href="employer-settings.php" class="btn btn-outline-primary btn-block btn-sm">Account Settings</a>
        </div>
      </div>

      <!-- profile -->
      <div class="col-md">
        <div class="card mb-3">
          <div class="card-body">
            <h6 class="mb-4">Company Information</h6>
            <div class="row px-2 my-2">
              <div class="col-md-3">
                <h6>Company name</h6>
              </div>
              <div class="col-md">
                <span><?php echo $_SESSION['name']; ?></span>
              </div>
              <div class="col-md-3">
                <h6>Company type</h6>
              </div>
              <div class="col-md">
                <span><?php echo $_SESSION['type']; ?></span>
              </div>
              <hr>
            </div>
            <div class="row px-2 my-2">
              <div class="col-md-3">
                <h6>Email</h6>
              </div>
              <div class="col-md">
                <a class="text-decoration-none text-black" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=<?php echo $_SESSION['email']; ?>" target="_blank"><?php echo $_SESSION['email']; ?></a>
              </div>
              <hr>
            </div>
            <div class="row px-2 my-2">
              <div class="col-md-3">
                <h6>Contact number</h6>
              </div>
              <div class="col-md">
                <a class="text-decoration-none text-black" href="tel: <?php echo $_SESSION['phone_number']; ?>"><?php echo $_SESSION['phone_number']; ?></a>
              </div>
              <div class="col-md-3">
                <h6>Year Establish</h6>
              </div>
              <div class="col-md">
                <span><?php echo $_SESSION['year_establish']; ?></span>
              </div>
              <hr>
            </div>
            <div class="row px-2 my-2">
              <div class="col-md-3">
                <h6>Address</h6>
              </div>
              <div class="col-md">
                <a class="text-decoration-none text-black" href="https://www.google.com/maps/place/<?php echo $_SESSION['address']; ?>" target="_blank"><?php echo $_SESSION['address']; ?></a>
              </div>
              <hr>
            </div>
            <div class="row px-2 my-2">
              <div class="col-md-3">
                <h6>Web page</h6>
              </div>
              <div class="col-md">
                <a href="<?php echo $_SESSION['webpage']; ?>" target="_blank"><?php echo $_SESSION['webpage']; ?></a>
              </div>
              <hr>
            </div>
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
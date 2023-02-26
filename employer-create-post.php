<?php

session_start();
require 'connection/config.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
} else {
    require 'headerLogin.php';
}

if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $company_id = $_SESSION['company_id'];
    $name = $_SESSION['name'];
    $address = $_SESSION['address'];
    $description = $_POST['description'];
    $time = $_POST['time'];
    $job_type = $_POST['job_type'];
    $status = "1";

    $sql = "INSERT INTO job_posts (company_id,name, description, time, job_type, status, address) VALUES ('$company_id', '$name', '$description', '$time', '$job_type', '$status', '$address')";
    $result = mysqli_query($conn, $sql);

    // SUCCESS MESSAGE
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
                    <a href="employer-profile.php" class="btn btn-outline-primary btn-block btn-sm">Profile</a>
                    <a href="employer-applicants.php" class="btn btn-outline-primary btn-block btn-sm">Applicants</a>
                    <a href="employer-job-posted.php" class="btn btn-primary btn-block btn-sm">Job Posted</a>
                    <a href="employer-settings.php" class="btn btn-outline-primary btn-block btn-sm">Account Settings</a>
                </div>
            </div>


            <!-- job_posted -->
            <div class="col-md">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="employer-job-posted.php" class="btn btn-primary btn-sm btn-block">Back</a>
                        </div>

                        <form method="POST" class="row px-2 my-2">
                            <div class="row mb-3">
                                <div class="col-md">
                                    <p class="fw-bold">Description <sup>*</sup></p>
                                    <textarea class="form-control" name="description" cols="100" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md">
                                    <p class="fw-bold">Time <sup>*</sup></p>
                                    <input type="number" name="time" class="form-control" min="1" max="12" required>
                                    <small>Note: This Time means duty per day in hours format</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md">
                                    <p class="fw-bold">Job Type <sup>*</sup></p>
                                    <select name="job_type" class="form-control">
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Full Time, Part Time">Full Time, Part Time</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                <div class="col-md">
                                    <p class="fw-bold">Status <sup>*</sup></p>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>


                                </div>
                            </div> -->

                            <button name="submit" type="submit" class="btn btn-primary btn-block btn-sm"> Create post</button>

                            <hr>
                        </form>

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
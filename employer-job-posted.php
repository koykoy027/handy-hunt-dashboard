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
                        <div class="d-flex justify-content-between">
                            <!-- <div class="col-md-2">
                                <select name="" id="" class="form-control">
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div> -->
                            <h6>Job Post</h6>
                            <a href="employer-create-post.php" class="btn btn-primary btn-sm">Add post</a>
                        </div>

                        <div class="row px-2 my-2">
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

                                    $query = "SELECT * FROM job_posts WHERE company_id='$company_id' ORDER BY created_at DESC ";
                                    $query_run = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <div class="row p-2">
                                                        <div class="col-md-2">
                                                            <img src="https://via.placeholder.com/100" style="border-radius: 50%" />
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="d-flex justify-content-between">
                                                                <a href="" class="text-decoration-none text-black fw-bold">
                                                                    <?= $row['name']; ?>
                                                                </a>
                                                                <div class="dropdown">
                                                                    <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-three-dots-vertical"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="employer-create-post-edit.php?id=<?= $row['id']; ?>">Update</a></li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <small class="text-black"><?= $row['created_at']; ?></small>
                                                            <hr>
                                                            <p><?= $row['description']; ?></p>

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
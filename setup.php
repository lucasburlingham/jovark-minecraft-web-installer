<?php

include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Setup</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <nav class="dark navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="dark navbar-brand" href="index.php">
            Jovark Services Admin Panel
        </a>
        <button class="dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark navbar-toggler-icon"></span>
        </button>
        <div class="dark collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="dark navbar-nav">
                <a class="dark nav-item nav-link active" href="#">Setup</a>
                <a class="dark nav-item nav-link" href="#">Features</a>
                <a class="dark nav-item nav-link" href="#">Pricing</a>
                <a class="dark nav-item nav-link" href="#">Disabled</a>
                <li class="dark nav-item dropdown">
                    <a class="dark nav-link dropdown-toggle text-success float-right" style="float:right;" href="#"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <?php
                        $username = $_SESSION['username'];
                        $query = "SELECT realname from `users` WHERE username='$username'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $row = mysqli_fetch_assoc($result);
                        echo $row['realname'];
                        ?>
                    </a>

                    <div class="dark dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dark dropdown-item" href="profile.php">Profile</a>
                        <a class="dark dropdown-item" href="#">Preferences</a>
                        <div class="dark dropdown-divider"></div>
                        <a class="dark dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <div class="dark jumbotron jumbotron-fluid bg-secondary text-light">
        <h1 class="dark display-3">We hear that you want to start.</h1>
        <p class="dark lead">Fill out the form below to get on your way.</p>
    </div>

    <!-- Insert form from test.html -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
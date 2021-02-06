<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="dark bg-gradient-dark">
    <div class="dark container-fluid">
        <div class="dark row">
            <div class="dark col-sm-1 col-lg-3 col-md"></div>
            <div class="dark col-sm-10 col-lg-6">
                <div class="dark wrapper">
                    <div class="dark jumbotron shadow-lg centered">
                        <img src="logo.webp" width="50%"></img>

                        <h1 class="dark text-primary">Jovark Admin Panel</h1>
                        <?php
                        require('db.php');
                        session_start();
                        // If form submitted, insert values into the database.
                        if (isset($_POST['username'])) {
                            $username = stripslashes($_REQUEST['username']); // removes backslashes
                            $username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
                            $password = stripslashes($_REQUEST['password']);
                            $password = mysqli_real_escape_string($con, $password);
                            //Checking is user existing in the database or not
                            $query = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            $rows = mysqli_num_rows($result);
                            echo $rows;
                            if ($rows == 1) {
                                $_SESSION['username'] = $username;
                                header("Location: index.php"); // Redirect user to index.php
                            } else if ($rows == 0) {
                                echo "<div class='text-danger'><h5>Username/password is incorrect.</h5><br/>Click here to <a href='login.php'>Login</a></div>";
                            }
                        } else {
                        ?>
                        <h1>Log In</h1>
                        <br>
                        <form action="" method="post" name="login" class="dark form-group">
                            <input type="text" name="username" placeholder="Username" class="dark form-control"
                                required />
                            <br>
                            <input type="password" name="password" placeholder="Password" class="dark form-control"
                                required />
                            <br>
                            <input name="submit" type="submit" value="Login"
                                class="dark form-control btn btn-outline-primary" />
                            <br>
                        </form>
                        <p>Not registered yet? <a href='registration.php'>Register Here</a>
                        </p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="dark col-sm-1 col-lg-3"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>


</html>
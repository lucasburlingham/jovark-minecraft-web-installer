<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gradient-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-lg-3 col-md"></div>
            <div class="col-sm-10 col-lg-6">
                <div class="wrapper-r">
                    <div class="jumbotron shadow-lg border text-center">
                        <?php
                        require('db.php');
                        // If form submitted, insert values into the database.
                        if (isset($_REQUEST['username'])) {
                            $username = stripslashes($_REQUEST['username']); // removes backslashes
                            $username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
                            $realname = stripslashes($_REQUEST['realname']); // removes backslashes
                            $realname = mysqli_real_escape_string($con, $realname); //escapes special characters in a string
                            $email = stripslashes($_REQUEST['email']);
                            $email = mysqli_real_escape_string($con, $email);
                            $password = stripslashes($_REQUEST['password']);
                            $password = mysqli_real_escape_string($con, $password);
                            $trn_date = date("Y-m-d H:i:s");
                            $query = "INSERT into `users` (username, password, email, trn_date, realname) VALUES ('$username', '" . md5($password) . "', '$email', '$trn_date', '$realname')";
                            $result = mysqli_query($con, $query);
                            if ($result) {
                                echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                            }
                        } else {
                        ?>
                        <div class="form">
                            <h1>Register</h1>
                            <form name="registration" action="" method="post" class="form-group">
                                <input type="text" name="realname" placeholder="Full Name"
                                    class="form-control shadow-sm" class="form-control" required />
                                <br>
                                <input type="text" name="username" placeholder="Username" class="form-control shadow-sm"
                                    class="form-control" required />
                                <br>
                                <input type=" email" name="email" placeholder="Email" class="form-control" required />
                                <br>
                                <input type="password" name="password" placeholder="Password"
                                    class="form-control shadow-sm" required />
                                <br>
                                <input type="submit" name="submit" value="Register"
                                    class="form-control btn btn-outline-primary shadow-sm" />
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-1 col-lg-3"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
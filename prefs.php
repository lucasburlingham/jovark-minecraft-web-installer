<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-darkmode@0.7.0/dist/darktheme.css" />
    <script src="https://unpkg.com/bootstrap-darkmode@0.7.0/dist/theme.js"></script>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Jovark Services Management Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Full Console</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        $username = $_SESSION['username'];
                        $query = "SELECT realname from `users` WHERE username='$username'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $row = mysqli_fetch_assoc($result);
                        echo $row['realname'];
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header">Account</h6>
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <?php
                        $username = $_SESSION['username'];
                        $query = "SELECT theme from `users` WHERE username='$username'";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        $row = mysqli_fetch_assoc($result);
                        $theme = $row['theme'];
                        if ($theme == "light") {
                            echo ('<a class="dropdown-item active disabled" href="prefs.php">Preferences</a>');
                        } else {
                        ?>
                        <a class="dropdown-item">
                            <script>
                            const themeConfig = new ThemeConfig();
                            const darkSwitch = writeDarkSwitch(themeConfig);
                            themeConfig.initTheme();
                            </script>
                        </a>
                        </head>
                        <?php } ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
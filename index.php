<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>
        Jovark Minecraft Web Installer
    </title>
</head>

<body>


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="topnav">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="#tab5Id" class="nav-link">Another link</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link disabled">Disabled</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>

    <script>
        $('#topnav a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
    <?php
    // check to see if the server root is writable
    if (!is_writable('.')) {
        $error .= 'Can\'t write to the current directory. Please fix this by giving the webserver user write access to the directory.<br/>';
        echo ($error);
    }
    // check to see if the server root is readable
    if (!is_readable('.')) {
        $error .= 'Can\'t read the current directory. Please fix this by giving the webserver user write access to the directory.<br/>';
        echo ($error);
    }





    // Check the status of the installation from status.conf file which has 1 word in it
    $status = shell_exec('cat status.conf | head -n 1');
    echo "Status: " . $status . "<br>";
    checkDependancies();


    function checkDependancies()
    {
        $OS = PHP_OS;
        echo "Checking Dependancies";
        // Check main java version to see if it is installed, should print out 'YES' if it is installed, and 'NO' if it is not
        if ($OS === 'WINNT') {
            // if we are running Windows
            if (exec('java -version > NUL && echo "YES" || echo "NO"') === "YES") {
                echo "Running Installer...";
                runInstall();
            } else {
                echo "NO";
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
            echo "<br> Running Windows";
        } elseif ($OS === 'Linux' || 'FreeBSD' || 'Darwin') {
            // if we are running Linux, BSD, or macOS
            if (exec('command -v java >/dev/null && echo "YES" || echo "NO"') === 'YES') {
                echo "Running Installer...";
                runInstall();
            } else {
                // if we do not have java, display the help
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
        }
    }


    function runInstall()
    {
        echo "Running installer actually...";
        $CD = getcwd();
        mkdir("$CD/server");
        chdir("server");
        echo ("Made Server folder...");
        $url = 'https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar';
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo ("Downloaded server.jar to the current directory");
        } else {
            echo ("Downloading server.jar to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
        }
        chdir("../");
    }


    echo ('


    <div>
        <div class="container">
            <div class="row">
            ');
    // dynamic content here
    echo ('

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>

');

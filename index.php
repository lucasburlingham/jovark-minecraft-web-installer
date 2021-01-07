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
    echo "Status: " . $status;
    checkDependancies();


    function checkDependancies()
    {
        echo "Checking deps";
        // Check main java version to see if it is installed, should print out 'YES' if it is installed, and 'NO' if it is not
        // POSIX
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            // if we are running Windows
            $hasJava = shell_exec('java -version > NUL && echo yes || echo no');
            if ($hasJava == "YES") {
                echo "Running Installer...";
                echo $hasJava;
                runInstall();
            } else {
                echo "NO";
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
            echo "Windows";
        } else {
            // if we are running Linux, BSD, or macOS
            $hasJava = shell_exec('command -v java >/dev/null && echo "YES" || echo "NO"');
            if ($hasJava == 'YES') {
                echo "Running Installer...";
                echo $hasJava;
                runInstall();
            } elseif ($hasJava == 'NO') {
                echo "NO";
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
            echo "Other";
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


    // get title now so we can use it in the next bunch of HTML

    echo ('


    <div>
        <div class="container">
            <div class="row">
            ');
    //dynamic content here
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

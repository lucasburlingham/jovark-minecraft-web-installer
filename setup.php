<?php
// get and assign POST values from the confirmation.html page

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $gottyPort = $_POST['gottyport'];
    $OS = $_POST['os'];
    $initRam = $_POST['initram'];


    if (empty($gottyPort)) {
        echo "Remote Console Connection port is empty! Please go back and fix it before continuing.";
    } else {
        echo ("Configuring for $OS. ");
    }
}

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



// Check the status of the installation from status.conf file which has the current status as the last line of the file
$status = shell_exec('cat status.conf | tail -n 1');
echo "Status: " . $status . "<br>";
checkDependancies($OS);

function checkDependancies($OS)
{
    if (exec('cat status.conf | tail -n 1') === 'ready') {
        // show options to configure the install
    } elseif (exec('cat status.conf | tail -n 1') === 'installing') {

        echo "Checking Dependancies";
        // Check main java version to see if it is installed, should print out 'YES' if it is installed, and 'NO' if it is not
        if ($OS === 'WINNT') {
            // if we are running Windows
            if (exec('java -version > NUL && echo "YES" || echo "NO"') === "YES") {
                echo "Running Installer...";
                runInstall($OS);
            } else {
                echo "NO";
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
            echo "<br> Running Windows";
        } elseif ($OS === 'Linux' || 'FreeBSD' || 'Darwin') {
            // if we are running Linux, BSD, or macOS
            if (exec('command -v java >/dev/null && echo "YES" || echo "NO"') === 'YES') {
                echo "Running Installer...";
                runInstall($OS);
                // change status to done
                $text = "done\n";
                $statusFIle = file_put_contents('status.conf', $text . PHP_EOL, FILE_APPEND | LOCK_EX);
            } else {
                // if we do not have java, display the help
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
        }
    } elseif (exec('cat status.conf | tail -n 1') === 'done') {
        // show administrator page when done installing
    }
}


function runInstall($OS)
{
    $CD = getcwd();
    echo ("Running Installer");
    mkdir("$CD/server");
    echo ("Creating server folder...");
    chdir("server");



    echo ("Downloading Server.jar<br>Please be </i>patient</i>");
    $url = 'https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar';
    $file_name = basename($url);
    if (file_put_contents($file_name, file_get_contents($url))) {
        echo ("Downloaded $file_name to the current directory");
    } else {
        echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
    }



    echo ("Downloading goTTY dependency...");
    // Download version of goTTY depending on the version passed from the confirmation.html form.
    if ($OS === 'WINNT') {
        // Unfortunately, goTTY does not support any version of Windows. We may have to manufacture our own...
        echo ("This feature is not supported on this platform... Skipping.");
    } elseif ($OS === 'Linux') {
        // Download binary for system represented by $OS
        $url = "https://github.com/yudai/gotty/releases/download/v1.0.1/gotty_$OS.tar.gz";
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo ("Downloaded $file_name to the current directory");
        } else {
            echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
        }
    }

    if (!empty($url)) {
        mkdir('gotty');
        exec("tar -C gotty/ -zxvf $file_name");
    }




    chdir("../");
}

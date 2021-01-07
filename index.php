<?php

// Check the status of the installtion from status.conf file which has 1 word in it
$status = shell_exec('cat status.conf | head -n 1');
checkDependants($status);

function checkDependants($status)
{
    // Check main java version to see if it is installed, should print out 'version'
    $javaDependantCheck = shell_exec('java -version | head -n 1 | awk \'{print $2}\'');
    return $javaDependantStatus = $javaDependantCheck;
}


if ($status === "ready") {
    $page_title = "Obsidian Portal Admin | Starting Installer";
} elseif ($status === "installing") {
    $page_title = "Obsidian Portal Admin | Installer";
} elseif ($status === "complete") {
    $page_title = "Obsidian Portal Admin | Admin Page";
}

?>


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
        <?php
        echo ($page_title);
        ?>
    </title>
</head>

<body>
    <!-- <form action="<?php $_SERVER['PHP_SELF']; ?>">
        <p>
            <label>Initial RAM:</label>
            <input type="range" value="1024" min="512" max="3200" />
        </p>
        <p>
            <label>Extra RAM:</label>
            <input type="range" value="1024" min="0" max="3200" />
        </p>
        <p><input type="submit" /></p>
    </form> -->
    <div>
        <div class="container">
            <?php

            if (empty($javaDependantCheck)) {
                echo ("Something went wrong, and we cannot detect your version of Java.");
            } elseif ($javaDependantCheck != "version") {
                echo ("<iframe src=\"javaHelper.html\" width=\"100%\" height=\"500em\" frameBorder=\"0\"></iframe>");
            }

            if ($status === "installing") {
                mkdir('server');
                chdir('server');
                $url = 'https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar';
                $file_name = basename($url);
                if (file_put_contents($file_name, file_get_contents($url))) {
                    echo "Downloaded server.jar to the current directory";
                } else {
                    echo ("Downloading server.jar to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>
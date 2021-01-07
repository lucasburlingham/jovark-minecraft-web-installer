<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>
        <?php
        $status = shell_exec('cat status.conf | head -n 1');
        if ($status === "ready") {
            $page_title = "Obsidian Portal Admin | Starting Installer";
        } elseif ($status === "installing") {
            $page_title = "Obsidian Portal Admin | Installer";
        } elseif ($status === "complete") {
            $page_title = "Obsidian Portal Admin | Admin Page";
        }
        echo ($page_title);
        ?>
    </title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>">
        <p>
            <label>Initial RAM:</label>
            <input type="range" value="1024" min="512" max="3200" />
        </p>
        <p>
            <label>Extra RAM:</label>
            <input type="range" value="1024" min="0" max="3200" />
        </p>
        <p><input type="submit" /></p>
    </form>
    <div>
        <div class="container">
            <?php
            $javaDependantCheck = shell_exec('java -version | head -n 1 | awk \'{print $2}\'');
            if (!empty($javaDependantCheck)) {
                echo ("Something went wrong, and we cannot detect your version of Java.");
            } elseif ($javaDependantCheck != "version") {
                echo ("<iframe src=\"javaHelper.html\" width=\"100%\" height=\"500em\" frameBorder=\"0\"></iframe>");
            }
            if ($status === "installing") {
                mkdir('server');
                shell_exec('wget https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar');
            }

            ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>
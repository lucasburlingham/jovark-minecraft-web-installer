<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.3/cyborg/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>
        <?php
        var status = shell_exec('cat status.conf | head -n 1');
        if (status === "installing") {
            var page_title = "Obsidian Portal Admin | Installer";
        } else {
            var page_title = "Obsidian Portal Admin | Admin Page";
        }
        echo("$page_title");
        ?>
    </title>
</head>

<body>

<?php 
        var javaDependantCheck = shell_exec('java -version | head -n 1 | awk \'{print $2}\'');
        if (!empty(javaDependantCheck)) {
            echo "Something went wrong, and we cannot detect your version of Java"
        } elseif (javaDependantCheck != "version") {
            echo("Please install Java to run Minecraft Java Edition Server and Obsidian Portal Admin.");
        }
        if (status === "installing") {
            shell_exec('wget https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar');
        }

        ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>
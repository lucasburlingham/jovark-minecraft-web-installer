<?php
session_start();
$username = $_SESSION["username"];
if (!isset($username)) {
    print_r("<script>window.location.href='index.php'</script>");
    exit();
}
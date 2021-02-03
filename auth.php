<?php
session_start();
$username = $_SESSION["username"];
if (!isset($username)) {
    echo "<script>window.location.href='index.php'</script>";
    exit();
}
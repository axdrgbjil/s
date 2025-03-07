<?php
include 'config.php';
session_start();
if (!isset($_SESSION['auth'])) {
    die("Access Denied");
}
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if (strpos($url, 'http') !== 0) {
        die("Invalid URL");
    }
    $response = file_get_contents($url);
    echo htmlentities($response);
} else {
    echo "Provide URL parameter";
}
?>
<?php
include 'config.php';
if ($_POST['username'] == 'admin' && hash('sha256', $_POST['password']) == $hashed_password) {
    session_start();
    $_SESSION['auth'] = true;
    header('Location: dashboard.php');
} else {
    echo "Invalid credentials";
}
?>
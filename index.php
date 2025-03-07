<?php
session_start();
if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<html>
<head>
<title>Secure Corp Portal</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Welcome to Secure Corp Portal</h1>
<p>Login to access internal services</p>
<form method="POST" action="login.php">
    <label>Username:</label> <input type="text" name="username"><br>
    <label>Password:</label> <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
<a href="source.php">View Source</a>
</div>
</body>
</html>
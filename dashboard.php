<?php
session_start();
if (!isset($_SESSION['auth'])) {
    die("Access Denied");
}
?>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Welcome Admin</h1>
<p>Internal Services Portal</p>
<form method="GET" action="proxy.php">
    <label>Fetch URL:</label>
    <input type="text" name="url" placeholder="http://example.com"><br>
    <button type="submit">Fetch</button>
</form>
<a href="source.php">View Source</a>
</div>
</body>
</html>
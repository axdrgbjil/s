// source.php
<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    if (preg_match('/config|flag|passwd|htaccess/i', $file)) {
        die("Access Denied");
    }
    highlight_file($file);
} else {
    echo "Provide ?file= parameter";
}
?>

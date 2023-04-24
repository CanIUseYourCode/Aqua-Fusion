<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'afr_management_system');

//database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// accept all char
mysqli_set_charset($conn, "utf8mb4");

?>

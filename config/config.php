<?php
session_start();
$domain = "http://localhost";
$email = "leanhthuongx7@gmail.com";
$zalo = '0377579953';
$address = "Hà Nam";

define('DB_SERVER', 'ls-2e10920fd407f1f33678a0f75eb721e57a5e7c6e.cj8c8ey2qzxc.ap-southeast-1.rds.amazonaws.com');
define('DB_USER', 'dbmasteruser');
define('DB_PASS', 'Bshd.NNUJVfJd0EqN68bV=L]nb$!ol(3');
define('DB_NAME', 'websitebanhang');


// connection.php
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection

try {
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    mysqli_set_charset($con, "utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Log the error or display an error message
    die("Failed to connect to database: " . $e->getMessage());
}


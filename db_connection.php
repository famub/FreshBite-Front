<?php
$host = "localhost";
$user = "root";       // حسب إعداد MAMP أو XAMPP
$password = "root";   // حسب إعداد MAMP أو XAMPP
$dbname = "freshbit";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8"); // ضروري للعربي
?>
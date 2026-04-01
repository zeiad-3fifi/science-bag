<?php
$host = "127.0.0.1:3307"; // زودنا رقم البورت هنا بناءً على صورتك
$user = "root";
$pass = ""; 
$db_name = "haqiba_db";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("خطأ في الاتصال: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
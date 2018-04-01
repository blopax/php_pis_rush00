<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '210987';
$mysql_database = 'db_rush';

$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);



if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.<BR>";


?>

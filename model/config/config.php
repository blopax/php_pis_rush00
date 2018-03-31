<?php

session_start();

$conn = mysqli_connect('localhost', 'root','MDP ICI', 'rush00');


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.<BR>";

?>

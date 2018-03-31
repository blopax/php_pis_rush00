<?php
require('./model/config/config.php');

$filename = 'import.sql';

// Connect to MySQL server
$server_conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password) or die ('Error connecting to MySQL server: ' . mysqli_connect_error());
// Select database
$selected_db = mysqli_select_db($server_conn, $mysql_database) or die('Error selecting MySQL database: ' . mysqli_connect_errno());


$templine = '';

$lines = file_get_contents($filename);

foreach ($lines as $line)
{
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;

    $templine .= $line;
    if (substr(trim($line), -1, 1) == ';')
    {
        mysqli_query($server_conn + $selected_db, $templine) or print('Error - This don\'t work.');
        $templine = '';
    }
}
echo "Tables imported successfully";
?>
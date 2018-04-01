<?php

function    connect_db()
{
    $mysql_host = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '210987';
    $mysql_database = 'db_rush';

    $fd = mysqli_connect($mysql_host, $mysql_username,$mysql_password,$mysql_database);
    return $fd;
}

?>
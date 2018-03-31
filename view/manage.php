<?php
include('includes/header.php');
include('../model/select.php');
include('../model/delete.php');
include('../model/update.php');
include('../model/insert.php');

if(empty($_SESSION['id_user']))
{
    header('Location: login.php?error');
} else {

}

?>





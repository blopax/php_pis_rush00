l<?php
include('includes/header.php');
include('../model/select.php');

if($_SESSION['id_user'] == 0)
    header('Location: login.php');

if(isset($_POST['logout']) AND $_SESSION['id_user'] !== 0) {
    $_SESSION['id_user'] = 0;
    header('Location: login.php');
}

?>

<form method="post">
        <button type="submit" name="logout">Logout</button>
</form>

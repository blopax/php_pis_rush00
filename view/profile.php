<?php
include('includes/header.php');
include('../model/select.php');
include('../model/delete.php');

if(empty($_SESSION['id_user']))
{
    header('Location: login.php?error');
} else {

if(isset($_POST['delete']))
{
    deleteAccount($conn, $_SESSION['id_user']);
    $_SESSION['id_user'] = '';
    header('Location: index.php');
}

if(isset($_POST['manage']))
    header('Location: manage.php');

}

?>

<form method="post">
    <button name="delete">Supprimer le compte </button>
</form>

<?php if(getUserLevel($conn, $_SESSION['id_user']) === 1) { ?>
<form method="post">
    <button name="manage">Administrer le site </button>
</form>
<?php } ?>

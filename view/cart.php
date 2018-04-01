<?php


session_start();

function    additem($id_item)
{
    if (!$_SESSION['item_in_cart'])
        $_SESSION['item_in_cart'] = Array();
    $_SESSION['item_in_cart'][] = $id_item;


}

function    validate_cart()
{
    if ($_SESSION['id_user'] !== 0)
        return TRUE;
    else
        return FALSE;

}

if ($_POST['id_item'] AND isset($_POST['logout']))
    additem($_POST['id_item']);
if (isset($_POST['validate']) AND validate_cart())
print_r($_SESSION);
?>


<form method="post">
    <input type="number" name="id_item">
    <button type="submit" name="logout">Logout</button>
    <button type="submit" name="validate">Valider</button>
</form>

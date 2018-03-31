<?php
include('config/config.php');

function	deleteItemToCart($conn, $id_user, $item)
{
    $query = "DELETE FROM cart WHERE id_user = '".$id_user."' AND item='".$item."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);

}

function	deleteAllItems($conn, $id_user)
{
    $query = "DELETE FROM cart WHERE id_user = '".$id_user."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function    deleteAccount($conn, $id_user)
{
    $query = "DELETE FROM users WHERE id_user = '" . $id_user . "'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

?>
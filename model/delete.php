<?php
include('config/config.php');

function	deleteItemToCart($conn, $id_cart, $id_item)
{
    $query = "DELETE FROM cart_items WHERE id_cart = '". $id_cart ."' AND item = '". $id_item ."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function	deleteAllItems($conn, $id_cart)
{
    $query = "DELETE FROM cart_items WHERE id_cart = '". $id_cart ."'";
    mysqli_query($conn, $query);
    $query = "DELETE FROM cart WHERE id_cart '". $id_cart ."'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function    deleteAccount($conn, $id_user)
{
    $query = "DELETE FROM users WHERE id_user = '" . $id_user . "'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function   deleteItemAdmin($conn, $id_items)
{
    $query = "DELETE FROM items WHERE id_items = '" . $id_items . "'";
    mysqli_query($conn, $query);
    $query = "DELETE FROM categories_item WHERE id_items = '" . $id_items . "'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function   deleteCategoryAdmin($conn, $id_cat)
{
    $query = "DELETE FROM categories WHERE id_cat = '" . $id_cat . "'";
    mysqli_query($conn, $query);
    $query = "DELETE FROM categories_items WHERE id_cat = '" . $id_cat . "'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

?>

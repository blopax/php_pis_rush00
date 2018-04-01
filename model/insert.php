<?php

include_once('config/connect_db.php');

function    addNewCart($id_user)
{

    $query = "INSERT INTO cart (`id_user`) VALUES ($id_user);";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}

function    addItemInCart($id_cart, $id_item, $quantity, $quantity_price)
{

    $query = "INSERT INTO `cart_items`(`id_cart`, `id_item`, `quantity`, `quantity_price`) VALUES ($id_cart, $id_item, $quantity, $quantity_price)";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);


    mysqli_close($fd);
    return $result;
}

function    addNewUser($firstname, $lastname, $email, $password)
{

    $query = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}

function    addNewItem($item_name, $item_price, $item_pic, $id_cat)
{

    $query = "INSERT INTO `items`(`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('$item_name', $item_price, '$item_pic', $id_cat)";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}

function    addNewCategory($cat_name)
{

    $query = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}


?>
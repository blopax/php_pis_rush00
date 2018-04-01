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

function    addNewCart($id_user)
{

    $query = "INSERT INTO `cart`(`id_user`) VALUES ($id_user)";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function    addItemInCart($id_cart, $id_item, $quantity, $quantity_price)
{

    $query = "INSERT INTO `cart_items`(`id_cart`, `id_item`, `quantity`, `quantity_price`) VALUES ($id_cart, $id_item, $quantity, $quantity_price)";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function    addNewUser($firstname, $lastname, $email, $password)
{

    $query = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$email', '$password')";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function    addNewItem($item_name, $item_price, $item_pic, $id_cat)
{

    $query = "INSERT INTO `items`(`item_name`, `item_price`, `item_pic`, `id_cat`) VALUES ('$item_name', $item_price, '$item_pic', $id_cat)";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function    addNewCategory($cat_name)
{

    $query = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function    createItem($conn, $category)
{
    $query = "INSERT INTO items () VALUES ()";
    if(mysqli_query($conn, $query))
        return 1;
    else
        return 0;
    mysqli_close($conn);
}

function    createCategory($conn, $category)
{
    $query = "INSERT INTO categories VALUES ($category)";
    if(mysqli_query($conn, $query))
        return 1;
    else
        return 0;
    mysqli_close($conn);
}



//////// FONCTIONS PANIER UTILISATEUR ////////
function	addItemToCart($conn, $id_user, $item)
{

}



function    userSignup($conn, $id_user, $firstname, $lastname, $email, $password, $admin)
{
    $query = "INSERT INTO users(id_user, firstname, lastname, email, password, admin) VALUES ('".$id_user."', '".$firstname."', '".$lastname."', '".$email."','".$password."', '".$admin."')";
    if(mysqli_query($conn, $query))
        return 1;
    else
        return 0;
}

?>
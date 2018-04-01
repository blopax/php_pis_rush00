<?php

include('config/config.php');
include_once('config/connect_db.php');



function    getCategories()
{

    $query = "SELECT cat_name FROM categories";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

    mysqli_close($fd);
    return $row;
}

function    getUsers()
{
    $query = "SELECT * FROM users";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function getUserProfile($id_user)
{
    $query = "SELECT * FROM users WHERE id_user='" . $id_user . "';";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}

function    getItemsByCategory($category)
{
    $query = "SELECT * FROM items WHERE id_cat IN (SELECT id_cat FROM categories WHERE cat_name='" . $category . "');";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;

}

function    getCartByUser($id_user)
{


    $query = "SELECT id_cart FROM cart WHERE id_user='" . $id_user . "';";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

    mysqli_close($fd);
    return $row;
}

function    getItemsByCart($id_cart)
{
    $query = "SELECT * FROM cart_items WHERE id_cart='" . $id_cart . "';";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    while ($row[] = mysqli_fetch_array($result, MYSQLI_ASSOC))

        mysqli_close($fd);
    return $row;
}


function    userLogin($conn, $email, $password)
{
	$query = "SELECT * FROM users WHERE email= '" . $email . "' AND password= '" . $password . "'";
	echo $password;

    if ($result = mysqli_query($conn, $query))
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['id_user'];
    }
}

function    checkIfEmailExist($conn, $email)
{
    $query = "SELECT email FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
        return 1;
    else
        return 0;
}

function    getUserLevel($conn, $id_user)
{
    $query = "SELECT id_user FROM users WHERE id_user = '" . $id_user . "' AND admin = 1";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
        return 1;
    mysqli_close($conn);
}

?>

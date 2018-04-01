<?php

include_once('config/connect_db.php');

function    updateUser($id_user, $firstname, $lastname, $email, $password, $admin)
{

    $query = "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',password='$password',admin=$admin WHERE id_user =$id_user";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}

function    updateItem($id_item, $item_name, $item_price, $item_pic, $id_cat)
{

    $query = "UPDATE items SET item_name='$item_name',item_price=$item_price,item_pic='$item_pic',id_cat=$id_cat WHERE id_item=$id_item";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}

function    updateCategory($id_cat, $cat_name)
{

    $query = "UPDATE categories SET cat_name='$cat_name' WHERE id_cat=$id_cat";

    $fd = connect_db();
    $result = mysqli_query($fd, $query);

    mysqli_close($fd);
    return $result;
}


?>



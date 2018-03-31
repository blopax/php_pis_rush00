<?php
include('config/config.php');

function    createItem($conn, $category)
{
    $query = "INSERT INTO items () VALUES ()";
    if(mysqli_query($conn, $query))
        return 1;
    else
        return 0;
    mysqli_close($conn);
}

function    createCategory($conn)
{
    $query = "INSERT INTO categories () VALUES ()";
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
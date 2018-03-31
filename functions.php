<?php
include('config/config.php');

//////// FONCTIONS UTILISATEUR ////////
function    userSignup($conn, $id_user, $firstname, $lastname, $email, $password, $admin)
{
    $query = "INSERT INTO users(id_user, firstname, lastname, email, password, admin) VALUES ('".$id_user."', '".$firstname."', '".$lastname."', '".$email."','".$password."', '".$admin."')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}


function    userLogin($conn, $email, $password)
{
    $query = "SELECT email, password FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
        return true;
    else
        return false;
    mysqli_close($conn);
}

function    checkIfEmailExist($conn, $email)
{
    $query = "SELECT email FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
        return true;
    else
        return false;
    mysqli_close($conn);
}

function    deleteAccount($conn, $email)
{
    $query = "DELETE FROM users WHERE email = '" . $email . "'";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function    getUserLevel($conn, $email)
{
    $query = "SELECT email FROM users WHERE email = '" . $email . "'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        return $row['admin'];
    }
    mysqli_close($conn);
}

//////// FONCTIONS ITEMS / CATEGORIES ////////
function    createItem($conn, $category)
{
    $query = "INSERT INTO items VALUES";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function    createCategory($conn)
{
    $query = "INSERT INTO items() VALUES ()";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function    getItemsFromCategory($conn, $category)
{

}

//////// FONCTIONS PANIER UTILISATEUR ////////
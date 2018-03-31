<?php
include('config/config.php');

function    getItemsFromCategory($conn, $category)
{

}

function    userLogin($conn, $email, $password)
{
    $query = "SELECT * FROM users WHERE email= '" . $email . "' AND password= '" . $password . "'";

    if ($result = mysqli_query($conn, $query))
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['id'];
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
    $query = "SELECT id_user FROM users WHERE id_user = '" . $id_user . "'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        return $row['admin'];
    }
    mysqli_close($conn);
}

?>
<?php
include('config/config.php');

function    getItemsFromCategory($conn, $category)
{

}

function	getCartIdForUser($conn, $id_user)
{
	$query = "SELECT id_cart FROM cart WHERE id_user= '" . $id_user . "'";
	if($result = mysqli_query($conn, $query))
	{
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		return $row['id_cart'];
	}
}

function    getCategoryIdByName($conn, $cat_name)
{
    $query = "SELECT cat_name FROM categories WHERE cat_name= '" . $cat_name . "'";
    if($result = mysqli_query($conn, $query))
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['id_cat'];
    }
}

function    getItemIdByName($conn, $item_name)
{
    $query = "SELECT item_name FROM items WHERE item_name= '" . $item_name . "'";
    if($result = mysqli_query($conn, $query))
    {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $row['id_items'];
    }
}

function    userLogin($conn, $email, $password)
{
    $query = "SELECT * FROM users WHERE email= '" . $email . "' AND password= '" . $password . "'";

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

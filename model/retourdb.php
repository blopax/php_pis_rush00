<?php
include('../model/select.php');
include('../model/insert.php');
include('../model/delete.php');
include('../model/update.php');

include('config/config.php');

$category = $_POST['category'];
if ($category)
{
    test_select();
}

function    printtest($t)
{
    $i = 0;
    while ($t[$i]) {
        print_r($t[$i]);
        $i++;
    }
    echo "<BR>";
}

function test_select()
{
        $test = getItemsByCart(12);
        printtest($test);


    	/*getCartIdForUser($conn, $id_user);


        getCategoryIdByName($conn, $cat_name);


        getItemIdByName($conn, $item_name);


        userLogin($conn, $email, $password);


        checkIfEmailExist($conn, $email);


        getUserLevel($conn, $id_user);*/

}

?>

<form method="post">
    <fieldset>
        <legend>TEST</legend>
        <li>
            <label> category : </label>
            <input type="text" name="category" />
        </li>

        <button type="submit" name="login">Tester</button>
    </fieldset>
</form>

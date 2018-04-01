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

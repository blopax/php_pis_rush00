<?php
include('includes/header.php');
include('../model/select.php');

if(isset($_POST['login'])) {
    $error = 0;

    $email = $_POST['email'];
    if ($email == "")
        $error = 1;

    $password = $_POST['password'];
    if ($password == "")
        $error = 1;

    if (!$error)
    {
        if (userLogin($conn, $email, $password))
        {
            $_SESSION['id_user'] = userLogin($conn, $email, $password);
            header('Location: index.php');
        }
    } else {
        // Message d'erreur en HTML à mettre (Mauvais Login ou Mot de passe)
    }
}

?>

<form method="post">
    <fieldset>
        <legend>Se connecter :</legend>
        <li>
            <label> Email : </label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"/>
        </li>

        <li>
            <label> Password : </label>
            <input type="password" name="password" />
        </li>
        <button type="submit" name="login">Se connecter</button>
    </fieldset>
</form>
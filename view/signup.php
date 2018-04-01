<?php
include('includes/header.php');
include('../model/insert.php');

if(isset($_POST['signup']))
{
    $error = 0;
    $msg_error = "";

    $firstname = $_POST['firstname'];
    if($firstname == "")
        $error = 1;

    $lastname = $_POST['lastname'];
    if($lastname == "")
        $error = 1;

    $email = $_POST['email'];

    $password = $_POST['password'];
    if($password == "" || strlen($password) < 6 || ctype_upper($password[0]) == 0)
        $error = 2;

    if($error == 1)
        $msg_error = "Vous n'avez pas rempli la case Nom / Prénom.";
    if($error == 2)
        $msg_error = "Le mot de passe doit faire 6 caractères minimum et doit commencer par une majuscule.";


    if(!$error)
    {
        if(userSignup($conn, 0, $firstname, $lastname, $email, hash('whirlpool', $password), 0))
            echo 'Bravo ! Votre compte a été crée avec succès. Pouvez désormais vous connecter.';
        else
            echo "Erreur - L'inscription est actuellement indisponible (c'est pas vrai). Réessayez plus tard.";
    } else {
        echo "Erreur - Les informations que vous avez soumis sont invalides. Erreur : ".$msg_error ;
    }
}

?>

<html>
<body>
<form method="POST">
    <fieldset>
        <legend>Inscription:</legend>

        <li><label>Nom : </label>
            <input type="text" name="lastname" /></li>

        <li><label>Prénom : </label>
            <input type="text" name="firstname" /></li>

        <li><label>Votre adresse e-mail :</label>
            <input type="email" name="email" /></li>

        <li><label>Mot de passe : </label>
            <input type="password" name="password" /></li>

        <input type="submit" name="signup" value="s'inscrire" />
        </fieldset>
</form>
</body>
</html>
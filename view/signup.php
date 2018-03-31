<body>
<form action="inscription.php" method="POST">
    <fieldset>
        <legend>Inscription:</legend>

        <li><label>
            <input type="radio" id="civilite" name="civilite" value="M" />
            Monsieur</label></li>

        <li><label>
            <input type="radio" id="civilite" name="civilite" value="Mme" />
            Madame</label></li>

        <li><label for="nom">Username: </label>
            <input type="text" id="username" name="username" /></li>

        <li><label for="nom">Password: </label>
            <input type="password" id="passwd" name="passwd" /></li>

        <li><label for="nom">Nom: </label>
            <input type="text" id="nom" name="nom" /></li>

        <li><label for="prenom">Prenom: </label>
            <input type="text" id="prenom" name="prenom;" /></li>

        <li><label id ="mail">Votre mail </label>
            <input type="email" id="mail" name="mail" /></li>

        <li><label for="adress">Adresse: </label>
            <input type="adress" id="adress" name="adress" /></li>

        <li><label for="telephone">Telephone: </label>
            <input type="tel" id="telephone" name="telephone" /></li>

        <li><label id ="date">Date de naissance </label>
            <input type="date" id="date" name="date" /></li>

        <li><label>Abonnement a la newsletter
            <input type="checkbox" id="news" name="news" checked /></li>


        </label>

        <input type="submit" id="envoie" name="envoie" value="s'inscrire" />

        <input type="reset" id="reset" name="reset" value="renitialiser" />

        </ul>
        </fileset>
</form>
</body>
</html>
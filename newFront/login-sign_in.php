<?php
include("includes/head.php");
 ?>

  <section class="contenu ombre">
  <article >

    <form action="login-sign_in.php" method="POST">
   <fieldset>
     <legend>Inscription:</legend>

<ul>

  <li><label id ="mail">Votre mail </label>
  <input type="email" id="mail" name="mail" /></li>


  <li><label for="nom">Password: </label>
  <input type="password" id="passwd" name="passwd" /></li>

  <li><label for="nom">Nom: </label>
  <input type="text" id="nom" name="nom" /></li>

  <li><label for="prenom">Prenom: </label>
  <input type="text" id="prenom" name="prenom;" /></li>


  <input type="submit" id="envoie" name="envoie" value="s'inscrire" />

  <input type="reset" id="reset" name="reset" value="renitialiser" />
    </ul>
</fieldset>

  <fieldset>
    <legend>Connexion:</legend>
    <ul>



<li><label id ="mail">Votre mail </label>
<input type="email" id="mail" name="mail" /></li>


<li><label for="nom">Password: </label>
<input type="password" id="passwd" name="passwd" /></li>

<input type="submit" id="envoie" name="envoie" value="se connecter" />

<input type="reset" id="reset" name="reset" value="renitialiser" />

  </ul>
</fileset>
</form>



  </article>
</section>
<?php
include("includes/foot.php")
 ?>

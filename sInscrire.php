<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> S'inscrire </title>
    <link rel = "stylesheet" href = "style.css">
  </head>

  <head>
  <ul class="menu">
      <li>
            <a href="http://pams.script.univ-paris-diderot.fr/~bousseaue/Projet/accueil.php"> <img src="https://club-jdr.fr/wp-content/uploads/2021/12/jdr.png" width=50 height=50 > </a>
     </li>
       <li>
            <a href="http://pams.script.univ-paris-diderot.fr/~bousseaue/Projet/jouer.php">Jouer</a>
     </li>
     <li>
            <a href="http://pams.script.univ-paris-diderot.fr/~bousseaue/Projet/monPerso.php">monPerso</a>
         </li>
         <li>
            <a href="http://pams.script.univ-paris-diderot.fr/~bousseaue/Projet/sInscrire.php">connection/inscription</a>
         </li>
        </ul>
  </head>

  <body>
    <form action="traitement.php" method="post">
      <h1> Veuillez remplir le formulaire pour vous inscrire </h1>
      <div>
        <label for="e-mail :">e-mail&nbsp;: </label>
        <input type="email" id="mail" name="user_mail">
      </div>
      <div>
        <label for="Mot de passe :">Mot de passe: </label>
        <input type="texte" id="Mot de passe :" name="user_mdp">
      </div>
      <a href="http://pams.script.univ-paris-diderot.fr/~bousseaue/Projet/seConnecter.php"> <input type="submit" value="Valider"> </a>

    </form>
  </body>
</html>

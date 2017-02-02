<?php
session_start(); // On démarre la session AVANT toute chose
var_dump($_POST);
var_dump($_COOKIE);

if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['username'])) { //on teste si une session existe

  }
elseif (isset($COOKIE['password']) && isset($COOKIE['name']) && isset($COOKIE['password'])){ //s'il n'y a pas de session,on teste si il exite des données post et on initialise les données de session
  $_COOKIE['password'] = $_POST["password"];
  $_COOKIE['username'] = $_POST["username"];
  $_COOKIE['name'] = $_POST["name"];
  }
else {
  header("Location: form-2.php"); //ni de session ni de donnée post, on est redirigé vers le formulaire
  }


?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page d'après</title>
    </head>
    <body>
      <p>Re-bonjour !</p>
      <p>
        
        Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['name'] . ' et ton pseudo est ' . $_SESSION['username']; ?> !<br />
      </p>
      <form method="POST" action="deco-2.php"> <!-- On renvoie simplement vers une page qui nous renvoie vers la page de déconnexion (qui est la page du formulaire) -->
        <input type="submit" name="Ok" value="Deconnexion" >
      </form>
    </body>
</html>
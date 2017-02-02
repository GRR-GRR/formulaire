<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
session_destroy();// on détruit la session pour remettre les valeur a 0


echo "<h1>Page du formulaire</h1>";

// everything below will show after correct login 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>Veuillez entrer le mot de passe :</p>
        <form action="login-2.php" method="post">
            <p>
            username
            <input type="text" id="username" name="username"/>
            </p>
            <p>
            nom
            <input type="text" id="name" name="name"/>
            </p>
            mdp
            <input type="password" id="password" name="password" />
            <input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>
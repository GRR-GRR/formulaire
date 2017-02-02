<?php
// On démarre la session AVANT d'écrire du code HTML
unset($_COOKIE['password']);// on détruit la session pour remettre les valeur a 0
unset($_COOKIE['username']);
unset($_COOKIE['name']);

$password ='';
$username ='';
$name ='';

setcookie('password', $password, time() + 365*24*3600, null, null, false, true);
setcookie('username', $username, time() + 365*24*3600, null, null, false, true);
setcookie('name', $name, time() + 365*24*3600, null, null, false, true);

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
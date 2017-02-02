<?php 
session_start(); 

/*define('DS',  TRUE); // used to protect includes
define('USERNAME', $_SESSION['username']);
define('SELF',  $_SERVER['PHP_SELF'] );*/

//if (!USERNAME or isset($_GET['logout']))
// include('login-ok.php');
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
        <form action="login-ok.php" method="post">
            <p>
            <input type="text" id="username" name="username"/>

            <input type="password" name="login" />
            <input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>
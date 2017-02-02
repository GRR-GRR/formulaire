<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['login'] = $_POST["login"];
$_SESSION['username'] = $_POST["username"];


if(isset($_POST['login'])){

if(strtolower($_POST["username"])==$_SESSION['username'] && $_POST["login"]==$_SESSION['login']){
session_start();
$_SESSION['logged_in'] = TRUE;
header("Location: ./login-ok.php");

}
  else {
  $error= "Login failed !";
  }
}

echo '
  <h2>Login</h2>
  <p><label for="username">Username</label> <input type="text" id="username" name="username" value="" /></p>
  <p><label for="password">Password</label> <input type="password" id="password" name="password" value="" /></p>
  <p><input type="submit" name="submit" value="Login" class="button"/></p>
  </form>';
exit; 
?>
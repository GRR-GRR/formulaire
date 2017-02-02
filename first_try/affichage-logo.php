<?php

session_start();

$_SESSION['user_id'] = 1;

$expiry = new DateTime('+2 days');

$arr = array('nom' => 1, 'prenom' => 2, 'detail' => 3);

setcookie('cookieAnt', $arr, $expiry->getTimestamp(), null, null, false, true);


?>

<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Apache Team">
    <link rel="icon" href="./img/favicon.ico">

    <title>test de connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/styleAnt.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

  </head>

  <body>    

  <!-- Fixed navbar déconnecté -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <!-- <img alt="Logo" src="./img/icone-apache.png"> -->Test Connexion
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar-right"><!-- navbar-collapse -->
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Connexion</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-12">
<!--                     Connectez vous avec :
                    <div class="social-buttons">
                      <a href="./index-user.html" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                      <a href="./index-user.html" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                      ou  -->
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      <div class="form-group"> <!-- Name field -->
                          <label class="control-label " for="name">Nom</label>
                          <input class="form-control" id="name" name="name" type="text"/>
                      </div>
                      
                      <div class="form-group"> <!-- Email field -->
                          <label class="control-label requiredField" for="email">Email<span class="asteriskField">*</span></label>
                          <input class="form-control" id="email" name="email" type="email" placeholder="Email" required/>
                      </div>
<!--                       <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" required>
                      </div> -->
                      <div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe" required>
                         <div class="help-block text-right"><a href="mot-de-passe-oublier.html">Mot de passe oublié ?</a></div>
                      </div>
                      <div class="form-group">
                        <a href="./index-user.html" >
                          <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                        </a>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Se souvenir de moi
                        </label>
                      </div>
                    </form>
                  </div>
<!--                   <div class="bottom text-center">
                    Nouveau ici ? <a href="./login_register.html"><b>Rejoignez nous</b></a>
                  </div> -->
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- FIN DE LA BARRE DE NAV -->


<!-- Fil d'ariane -->
<div class="container">
  <ol class="row breadcrumb">
    <li class="active"><a href="#">Connexion</a></li>
  </ol>
</div>
<!-- Fin du fil d'ariane -->




<!-- Liste suggérée -->
<div class="container-fluid">
  <div class="row"><br>
    <h3 class="col-sm-10 col-sm-offset-1">Les infos :</h3>
  </div>
</div>
<!-- Liste suggérée ./-->


<!-- Résumé projet -->

<div class="container well">
  <div class="row content">
    <div class=" container-fluid col-sm-12 text-center">
      <p><img class="img" alt="photo du projet" src="./img/GIF-APACHE-LOADER-50px.gif" data-holder-rendered="true" style="width: 45px; height: auto;"></p>
      <p class="col-sm-10 col-sm-offset-1"><?php echo $_COOKIE['cookieAnt']; ?></p>
      <br>
    </div>  
 </div>
</div>

<!-- Fin de résumé projet -->




    <!-- FOOTER-->
    <div class="container">
      <div class="row footer">
        <hr>
        <div class="col-lg-12">
          <div class="col-md-6">
            <a href="#">Contact</a> | <a href="#">Mentions Légales</a> | <a href="#">Privacy</a>    
          </div>
          <div class="col-md-6">
            <p class="muted pull-right">© 2016 Alpha Projects. Droits réservés - Digital Campus in the Alps</p>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
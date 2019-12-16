<?php
    session_start() ; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN</title>
    <link href="Style/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Style/site\docs\4.1\examples\floating-labels\floating-labels.css" rel="stylesheet">
     <link href="Style\site\docs\4.1\examples\sign-in\signin.css" rel="stylesheet">
  </head>


  <body class="text-center">
      <form class="form-signin" method="POST" action="verif.php"> 
          <p>                 <?php 
if (isset($_SESSION['msg'] )){
echo '
<div class="alert alert-danger">
  <strong>Warning!</strong>'.$_SESSION['msg'].'</div>';}
unset($_SESSION['msg']) ; 


?> </p> <br> 
      <h1 class="h3 mb-3 font-weight-normal">Connectez vous </h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="AdresseMail" required autofocus>
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Mdp" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Enregistrer le mot de passe 
        </label>
          <p>  <a href="Inscription.php"><code>Inscrivez vous</code></a></p>

      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit2">Se connecter</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>
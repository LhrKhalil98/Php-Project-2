<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscrivez-Vous </title>

    <!-- Bootstrap core CSS -->
    <link href="Style/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="Style\site\docs\4.1\examples\sign-in\signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Style\site\docs\4.1\examples\checkout\form-validation.css" rel="stylesheet">
          <link href="Style/site\docs\4.1\examples\floating-labels\floating-labels.css" rel="stylesheet">

  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>CREEZ VOTRE COMPTE</h2>
      </div>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">commencez l'inscription  </h4>
          <form class="needs-validation" method="POST" action="verif.php" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nom</label>
                <input type="text" name="nom" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Prenom</label>
                <input type="text" name="prenom"class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
           Un nom de famille valide est requis.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">TEL</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+216</span>
                </div>
                <input type="text" name="tel" class="form-control" id="username" placeholder="Phone" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Votre nom d'utilisateur est requis.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email </label>
              <input type="email" name="AdresseMail" class="form-control" id="email" placeholder="toi@example.com" required="">
              <div class="invalid-feedback">
           Veuillez entrer une adresse email valide pour les mises à jour d'expédition.              </div>
            </div>
                   <div class="mb-3">
              <label for="email"> Mot de passe </label>
              <input type="password" name="Mdp" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
               Veuillez entrer votre mot de passe 
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Addresse</label>
              <input type="text" name="Rue" class="form-control" id="address" placeholder="Rue ... " required>
              <div class="invalid-feedback">
                Veuillez entrer votre adresse de livraison.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Ville</label>
                <select name ="Ville" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Ariana</option>
                  <option>Béja</option>
                  <option>Ben Arous</option>
                  <option>Bizerte</option>
                  <option>Gabes</option>
                  <option>Gafsa</option>
                  <option>Jendouba</option>
                  <option>Kairouan</option>
                  <option>Kasrine</option>
                  <option>Soussa</option>
                  <option>Monastir</option>
                  <option>Sfax</option>
                  <option>Mahdia</option>
                  <option>Tunis</option> 
                </select>
                <div class="invalid-feedback">
                  Veuillez sélectionner un pays valide.
                </div>
              </div>
             <div class="col-md-3 mb-3">
                <label for="zip">Region</label>
                <input name="City" type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                region requis.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Code postal</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                Code postal requis.
                </div>
              </div>
            </div>
            <hr class="mb-4">
          
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Sauvegarder cette information pour la prochaine fois</label>
            </div>
            <hr class="mb-4">

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit1" >Créer un compte</button>
          </form>
        </div>
      </div>
    </div>
   

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="Style\site\docs\4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Style\site\docs\4.1/assets/js/vendor/popper.min.js"></script>
    <script src="Style/dist/js/bootstrap.min.js"></script>
    <script src="Style\site\docs\4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>

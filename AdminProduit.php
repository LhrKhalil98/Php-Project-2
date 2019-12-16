
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produit</title>


    <link href="Style/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="Style\site\docs\4.1\examples\dashboard\dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tanwicha</a>
    
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Deconecter</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link" href="AdminPersonnes.php">
                  <span data-feather="users"></span>
                  Personnes 
                </a>
              </li>
                   <li class="nav-item">
                       <a class="nav-link" href="AdminProduit.php">
                  <span data-feather="shopping-cart"></span>
                  Recettes
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="AdminCommandes.php">
                  <span data-feather="file"></span>
                  Commandes 
                </a>
              </li>
         
       
           
      
            </ul>

          
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <br>


          <h2>Recettes </h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nom</th>
                  <th>Categorie</th>
                  <th>Prix </th>
                  <th><button type="button" class="btn btn-success">Ajouter Un Produit</button>
</th>
                </tr>
              </thead>
              <tbody>
                 <?php 
                  require 'produit.inc';
                  $produit = new produit();  
                  $res=$produit-> AfficherRecettes (); 
                  while($row=$res->fetch_assoc())
                  { extract($row) ;
                  if ($idCategorie==1) $val="salty" ; 
                       if ($idCategorie==2) $val="sweet" ; 
                            if ($idCategorie==3) $val="healthy"  ; 
                  echo '

                <tr>
                  <td>'.$idRecette.'</td>
                  <td>'.$Nom.'</td>
                  <td>'.$val.'</td>
                  <td>'.$Prix.'</td>
                  <td></td>                
                  </tr>' ; }?>
              
               
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="Style\site\docs\4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Style\site\docs\4.1/assets/js/vendor/popper.min.js"></script>
    <script src="Style/dist/js/bootstrap.min.js"></script>

   
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
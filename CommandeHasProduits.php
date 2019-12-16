    



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
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
                   <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
         
       
           
      
            </ul>

          
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <br> <br> <br>
            <div class="container">
  <h2>Produits De Commande #id </h2>
  <h4>Nom Client</h4>
  <table class="table">
    <thead>
      <tr>
        <th>Produit</th>
        <th>Quantite</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    
    </tbody>
  </table>
</div>
        </main>


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
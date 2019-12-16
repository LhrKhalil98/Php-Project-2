<?php include'Header.php';
require 'produit.inc'; 
$produit = new produit(); 
$idRE=0 ; 

if(isset($_GET['idRE']))
{
   $idRE=$_GET['idRE']; 
}
?>   
  <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
              
              
              <?php 
              if($idRE!=0){
                    $Res=$produit->AfficherRecettesID ($idRE) ; 
              while ($row =  $Res->fetch_assoc()){
              extract($row); 
    echo '
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="'.$Image.'"  height = "230px " alt="Card image cap">
                <div class="card-body">
                 <p class="card-text"><b>'.$Nom.'</b></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                <a href="Recette.php?id='.$idRecette.'">      <button type="button" class="btn btn-sm btn-outline-secondary">View</button> </a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">ADD favoris</button>
                  
                </div>
              </div>
         </div>
            </div>
            </div>
            ';   }
                  
                  
                  
              }else 
              $Res=$produit->AfficherRecettes () ; 
              while ($row =  $Res->fetch_assoc()){
              extract($row); 
    echo '
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="'.$Image.'"  height = "230px " alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>'.$Nom.'</b></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                <a href="Recette.php?id='.$idRecette.'">      <button type="button" class="btn btn-sm btn-outline-secondary">View</button> </a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">ADD favoris</button>
                  
                </div>
              </div>
         </div>
            </div>
            </div>
            ';   } ?>

      
     

         
       
          </div>
        </div>
      </div>
<?php include 'Footer.php ' ?> 
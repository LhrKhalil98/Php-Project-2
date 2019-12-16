<?php  include  'Header.php';
require 'produit.inc' ; 
if(isset ($_GET['id'])){
    $val=$_GET['id'];
    
}
    $produit= new produit() ; 
    $res=$produit->AfficherRecette($val);
    $row=$res->fetch_assoc() ; 
    extract ($row) ;

?>

 


<div class="container" style="padding-top: 80px ; ">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
 

      <div class="carousel-inner" role="listbox">
        <div class="item active">
<img src="<?php echo $Image  ?>"  height="400px" width="800px"  class="img-responsive" alt="Cinque Terre">
          
        </div>

      </div>

  
  
    </div>
  </div>
  <div class="col-sm-4">
      <h2> Les Ingredients</h2>
       <ul>
      <?php 
          $res1=$produit->AfficherIngredient ($val);  
       while($row1=$res1->fetch_assoc()){
           extract ($row1) ;  
           echo '
          <h4> <li> '.$NomI.'    </li></h4>
           ';
       } 
  
      
      ?> 
      </ul>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
  <h3>Preparation:</h3>
  <br>
  <div class="row">
  
  
    <div class="col-sm-9">
      <div class="well">
       <p><?php echo $Description    ?></p>
      </div>
 
     
      
    </div>
     <div class="col-sm-3">
         <a  href="addPanier.php?idR=<?php echo $idRecette ?>" > <img src="Images/box.jpg" class="img-responsive" style="width:100%" alt="Image"> </a>
  </div>
  <hr>
</div>

<div class="container text-center">    
  <h3>Autres recettes</h3>
  <br>
  <div class="row">
      <?php              
      $Res1=$produit->Recette7() ; 
              while ($row1 =  $Res1->fetch_assoc()){
              extract($row1); 
    echo '
    <a href="Recette.php?id='.$idRecette.'"><div class="col-sm-2">
      <img src="'.$Image.'" class="img-responsive" style="width:150px ; height: 200px ; " alt="Image">
      <p>'.$Nom.'</p></a>
    </div>
              ';}?>
  </div>
</div><br>
<hr>
<footer>          <?php include'Footer.php'?>
        
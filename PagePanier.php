<?php require 'Header.php'; 
require 'Connexion.php' ; 
require 'produit.inc';

$val=""; 
$panier = new Panier();  


if(isset($_GET['reset']))
{
    $panier->clear();
}
if(isset($_GET['del']))
{
    $panier->delete($_GET['del']);
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="container">
<?php $ids=array_keys($_SESSION['panier']); 
if (empty ($ids) ){
    $res=array() ; 
    $val="EMPTY !";


?>
        <div class="container">
            <h2 >Your Pannier <b><?php  echo $val ;  ?></b></h2>
            <hr>
    
  <?php 
 
}else  {?> 
<h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Nom Produit </th>
        <th>Quantite</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
         
             <?php 
    $res=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') ') ;
   while($row = $res-> fetch_assoc() ){
       extract($row);

       $val1 =$_SESSION['panier'][$idRecette] ; 
   echo'
      <tr class="danger">
        <td>'.$Nom.' </td>
        <td> '.$val1.'</td>
        <td>'.$Prix*$val1.'</td>
        <td>  <a href="PagePanier.php?del='.$idRecette.'"><button  style="float: right;" "type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
  
   '; }?>  
  
    </tbody>
      
  </table>
     <hr> 
     <table class="table">
    <thead>
      <tr>
        <th>Prix Total </th>

        <th><?php $total = $panier->Total() ; echo $total .'DT'?> </th>
        <th>  <a href="Pagepanier.php?reset=1" >  <button type="button" class="btn btn-danger">Reset</button> </a>
       <?php  if(isset($_SESSION['Connect']) ){   $id=$_SESSION['idPersonne']; echo'<a href="ValidationCommande.php?idpersonne='.$id.' "><button type="button" class="btn btn-success">Valider </button></a></th>' ; }else {
     echo'<a href="Login.php"><button type="button" class="btn btn-success">Valider </button></a></th>' ; }  ?>
      </tr>
    </thead>

  </table>
            <?php }  ?> 
    <?php require 'Footer.php' ?> 
</div>
<hr>
 

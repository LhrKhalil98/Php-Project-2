<?php require  'Base.inc' ; 
 
$BD=new Base () ; 
require 'Panier.php' ; 
$panier = new Panier() ; 
if (isset($_GET['idR']))
{
    
    $var2 = $BD->query( 'Select idRecette from Recette where idRecette=:id ',array ('id'=>$_GET['idR'] ) ); 
    //var_dump($var2);
    $panier->set($var2[0]->idRecette) ; 
    header("location:javascript://history.go(-1)") ; 
    $_SESSION['msg']=1 ; 
}
    else { die ("Vous n'aves pas selectionee ... ") ; 
} 
        ?>
  
<?php 
session_start();
unset($_SESSION['NomU']);
unset($_SESSION['PrenomU']);
unset($_SESSION['idPersonne']);
unset($_SESSION['Connect']);
unset($_SESSION['panier']) ; 
unset($_SESSION['nbProduit']) ; 

header('location:pagedacceuil.php'); 

?>
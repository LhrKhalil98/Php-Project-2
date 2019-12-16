<?php 
require 'produit.inc' ; 
$idpers=$_GET['idpersonne'];
$produit = new produit();  
$produit->Commander($idpers); 

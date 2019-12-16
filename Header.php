<?php session_start() ;
require 'Panier.php' ; 
$panier = new Panier() ;
  if(!isset ($_SESSION['panier'])){
        
        $_SESSION['nbProduit']=0  ; 
    } 
  ?>
<html lang="en">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images/Logo.jpg">

    <title>TANWICHA|KIT TANWICHA|COMMENDER</title>

    <!-- Bootstrap core CSS -->
    <link href="Style/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Style\site\docs\4.1\examples\carousel\carousel.css" rel="stylesheet">
  </head>
    
    
    
    
  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a href="pagedacceuil.php"> <h5 class="my-0 mr-md-auto font-weight-normal" > <img src="Images/Logo.jpg" height="50px" width="90px"></h5></a>
      &nbsp &nbsp &nbsp &nbsp <?php 
        if(isset($_SESSION['Connect'])){
        if   ($_SESSION['Role']==1 )
          echo '   <a class="p-2 text-dark" href="AdminPersonnes.php" ><b>   Admin </b></a> ' ;  } 
        ?>
        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </p>
      <nav class="my-2 my-md-0 mr-md-3" >
        <a class="p-2 text-dark" href="categorie.php">Categories</a>
        <a class="p-2 text-dark" href="Recettes.php">Recettes</a>
        <a class="p-2 text-dark" href="PagePanier.php">Panier &nbsp <span class="badge badge-secondary badge-pill"><?php if(isset($_SESSION['nbProduit'])){$total = $_SESSION['nbProduit'] ; echo $total;  }?></span></a> 
         
        <?php 
        if(isset($_SESSION['Connect'])){
            
            echo '
        <a class="p-2 text-dark" href="#" >Favoris</a>' ; }
          ?>
      
    
        </nav>
         <?php 
        if(isset($_SESSION['Connect'])){
            echo '
    <a class="btn btn-outline-primary" href="logout.php ">Deconnecter </a>
        '; } 
            else echo '

      <a class="btn btn-outline-primary" href="Login.php">Sign up</a>' ; ?>
    </div> 

    <main role="main">
<?php
require'Connexion.php' ; 
if($_GET['role']==0 ){
    $P=$_GET['idpersonne'];
    $rec->query('UPDATE Personne SET Role=1 where idPersonne='.$P.' ') ;
    header('location: AdminPersonnes.php');
}
if($_GET['role']==1 ){
   
    $P=$_GET['idpersonne'];
    $rec->query('UPDATE Personne SET Role=0 where idPersonne='.$P.' ') ;
        header('location: AdminPersonnes.php');

}
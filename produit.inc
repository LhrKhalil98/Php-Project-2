<?php 
class produit { 

    public function Recette7(){
                require 'Connexion.php ' ; 
        return  $res= $rec->query('select * from  recette ORDER BY RAND() LIMIT 6 ') ; 
    }
    
    public function AfficherRecettes ()
    {
        require 'Connexion.php ' ; 
        return  $res= $rec->query('select * from  recette ') ; 
    }
     public function AfficherRecettesID ($val)
    {
        require 'Connexion.php ' ; 
       return  $res= $rec->query('select * from  recette where idCategorie ='.$val.' ') ; 
    }
     public function AfficherRecette($val)
    {
        require 'Connexion.php ' ; 
       return  $res= $rec->query('select * from  recette where idRecette = '.$val.'  ') ; 
    }
        public function AfficherIngredient ($val )
    {
        require 'Connexion.php ' ; 
        return  $res= $rec->query('select * from  ingredient where idRecette='.$val.' ') ; 
    }
    public function Commander($idpersonne){
        require 'Connexion.php' ; 
        require'panier.php' ;
        $panier = new Panier();  

        $total = $panier->Total(); 
         $rec->query("insert into commande (Prix ,idPersonne) value  ('$total','$idpersonne')")or die ($rec->error); 
          if($rec->affected_rows ==1){
              $res= $rec->query('select max(idCommande)as Max from  Commande ') ;
              $row= $res->fetch_assoc()  ; 
              extract($row);
              $max=$Max ; 
                      
          }
          $ids=array_keys($_SESSION['panier']);
          $res1=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') ') ;
          
        while($row1 = $res1-> fetch_assoc() ){
          extract($row1);
            $rec->query("insert into commande_has_product ( idCommande ,idRecette) value  ('$max','$idRecette')")or die ($rec->error); 
        }
      

        
    }
     public function AfficherCommandes() {
         require 'Connexion.php' ; 
              return  $res=$rec->query('select * from Commande ') ; 
        }



}
 ?> 
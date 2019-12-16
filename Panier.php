<?php 

Class Panier {

    public function __construct(){
      if(!isset ($_SESSION)){
          session_start(); 
      }
    if(!isset ($_SESSION['panier'])){
        $_SESSION['panier']=array() ; 
        $_SESSION['nbProduit']=0 ; 
    } 
    }
    public function getPanier ()
    {
        return $_SESSION['panier'] ; 
    }
    public function set ( $value){
        if(isset ($_SESSION['panier'][$value])){
                    $_SESSION['panier'][$value]++; 
        }
        else {
        $_SESSION['panier'][$value]=1; 
        $_SESSION['nbProduit']++ ; } 
    }
    
 /*   public function get($key){
        if(isset($_SESSION['paniers'][$this->name][$key]))
            return $_SESSION['paniers'][$this->name][$key]; 
        return null ; 
    }*/
     public function delete($key){
            unset ($_SESSION['panier'][$key]); 
                $_SESSION['nbProduit']-- ; 
    }/*
     public function getPanier(){
        if(isset($_SESSION['paniers'][$this->name]))
            return  $_SESSION['paniers'][$this->name]; 
        return array() ; 
    }
   */  public function clear(){
      require 'Connexion.php';
       $ids=array_keys($_SESSION['panier']);
        $res=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') '); 
         while($row = $res-> fetch_assoc() ){
             extract($row) ;  
            unset($_SESSION['panier'][$idRecette]); 
                $_SESSION['nbProduit']=0 ;
         }
    }    
    public function  Changer($key){
            $ids=array_keys($_SESSION['panier']);
        if (empty ($ids) ){
        $res=array() ; }
        else {
        $res=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') ') ;}
         while($row = $res-> fetch_assoc() ){
          extract($row);
         $_SESSION['panier'][$idRecette]=$key ;  
         }
    }
    public function Total ()
    {  
              require 'Connexion.php';

        $total=0 ;
        $ids=array_keys($_SESSION['panier']);
        if (empty ($ids) ){
        $res=array() ; }
        else {
        $res=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') ') ;}
         while($row = $res-> fetch_assoc() ){
          extract($row);
          $total += ($Prix *  $_SESSION['panier'][$idRecette]) ;
        
        }
         return $total ; 
        
        
    }
    

    public function TotalProduit (){
     
     require 'Connexion.php';

        $totalP=0 ;
        $ids=array_keys($_SESSION['panier']);
       if (empty ($ids) ){
       $res=array() ; }
        else {
        $res=$rec->query('select * from Recette where idRecette IN ('.implode(',',$ids).') ') ;
         while($row = $res-> fetch_assoc() ){
         extract($row);
          $totalP = $totalP +  $_SESSION['panier'][$idRecette] ; 
         }
        
         return $totalP ;
         }}
        
        
 }
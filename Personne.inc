<?php

class Personne {
 
    public function SetInformation($val1 , $val2 , $val3, $val4 , $val5 ,$val6,$val7,$val8  ){
        require 'Connexion.php' ; 
        $msg="non valid" ; 
        $rec->query("insert into personne (Nom , Prenom , Tel, Email , City , Ville , Rue , Mdp) value  ('$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8')")or die ($rec->error);  
        if($rec->affected_rows ==1){ 
            $msg="valid" ; 
            return  $msg ; }
	 
    return $msg ;

    }
    public function  Login ($ValAdresseMail ,  $valMdp){
        $inscrit=false ; 
        require 'Connexion.php' ;  
      return $resultat=$rec->query("select *   from Personne ");
      
    }
    public function Personne(){
        require 'Connexion.php' ; 
        return $resultat=$rec->query("select *   from Personne group by idPersonne DESC");

    }
     public function Personneid($id){
        require 'Connexion.php' ; 
    
        $res= $rec->query('select * from  Personne where idPersonne ='.$id.' ') ; 
         $val2=$res->fetch_assoc()  ;
                 extract($val2) ; 
                 return $Nom ;
     
    }
    
    
}

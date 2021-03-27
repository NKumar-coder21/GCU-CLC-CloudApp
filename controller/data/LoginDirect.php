<?php 
include("UserDataService");
include("index.php");

Class LoginDirect {
    
   
    
    public function RedirectToDashBoard($username,$password){
        
        
        
        #Verifies the Authentication made from UserDataService
        if(authenticate($username,$password) == -1){
            header('Location: index.php');
        }
        else{
            header('Location: dashboard.php');
        }
    }
    
    
    
}



?>
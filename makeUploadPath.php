<?php
   function makeUploadPath($username, $filename){
       

        //check valid username
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            return "Invalid username";
            
        }
        
        if($filename == null){
            return sprintf("/%s", $username);
        }

        //check valid filename
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            return "Invalid filename";
            
        }

        return sprintf("/srv/module2Files/%s/%s", $username, $filename);

   } 
?>
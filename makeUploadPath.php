<?php
   function makeUploadPath($username, $filename){
       $filename = '"' . $filename . '"';
        error_log($filename, 0);
        //check valid username
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            return "Invalid username";
            
        }
        
        if($filename == null){
            return sprintf("/srv/module2Files/%s", $username);
        }
        
        //check valid filename
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            return "Invalid filename";
            
        }

        return sprintf("/srv/module2Files/%s/%s", $username, $filename);

   } 
?>
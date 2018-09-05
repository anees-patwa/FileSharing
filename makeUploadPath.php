<?php
   function makeUploadPath($username, $filename){
       //check valid filename
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            return "Invalid filename";
            
        }

        //check valid username
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            return "Invalid username";
            
        }
        
        return sprintf("/~apatwa/public_html/module2Grp/%s/%s", $username, $filename);
      
   } 
?>
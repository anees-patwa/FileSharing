<?php
   function makeUploadPath($username, $filepath){
       //check valid filename
        if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
            return "Invalid filename";
            
        }

        //check valid username
        if( !preg_match('/^[\w_\-]+$/', $username) ){
            return "Invalid username";
            
        }

        //check username against list of users
        $users = fopen("users.txt", "r");
        while(!feof($users)){
            if(fgets($users) == $username){
                return sprintf("/~apatwa/public_html/module2Grp/%s/%s", $username, $filename);
            }
        }
   } 
?>
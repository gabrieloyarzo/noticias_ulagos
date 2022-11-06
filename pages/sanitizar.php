<?php


function cleanInput($input){
    $forbidden_chars = array(
        "?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&",
        "$", "#", "*", "(", ")" , "|", "~", "`", "!", "{", "}", "%", "+");
     
    
        for ($i=0;  $i < count($forbidden_chars) ; $i++){

        if (strpos($input, $forbidden_chars[$i]) !== false){
            return false;

        } 
           
        }
    
} 

?>
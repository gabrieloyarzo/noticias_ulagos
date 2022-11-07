<?php


function Limpieza($input){
    $caracter_negados = array(
        "?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&",
        "$", "#", "*", "(", ")" , "|", "~", "`", "!", "{", "}", "%", "+");
     
       
        for ($i=0;  $i < count($caracter_negados) ; $i++){

        if (strpos($input, $caracter_negados[$i]) !== false){
            return false;

        } 
           
    }
    
    return $input;
    
} 

?>
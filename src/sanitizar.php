<?php
function clean_input($input){
    $forbidden_chars = array(
        "?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&",
        "$", "#", "*", "(", ")" , "|", "~", "`", "!", "{", "}", "%", "+");
    
    for ($i=0;  $i < count($forbidden_chars) ; $i++){
        if (strpos($input, $forbidden_chars[$i]) == true){
            return false;
        } 
    }

    return $input;
} 

?>
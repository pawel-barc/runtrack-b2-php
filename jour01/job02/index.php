<?php

function my_string_reverse(string $string) : string {
    $reversed = ''; 

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i]; 
    }

    return $reversed; 
}

var_dump(my_string_reverse('Hello')); 

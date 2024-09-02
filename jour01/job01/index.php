<?php
function my_string_search(string $haystack, string $needle) : int{

    $count = 0;
    $i = 0;
    
    while(isset($haystack[$i])){
        if($haystack[$i] === $needle){
            $count++;
        }
        $i++;
    }
    return $count;
}

echo my_string_search('La Plateforme', 'a');
?>
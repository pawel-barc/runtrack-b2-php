<?php

function my_is_prime( int $number ) : bool{
    if($number <= 1){
        return false;
    }

    for ($i = 2; $i <= $number/2; $i++){
        if($number % $i === 0){
            return false;
        }
    }
    return true;

}
var_dump(my_is_prime(1));   // Devrait retourner false (1 n'est pas un nombre premier)
var_dump(my_is_prime(2));   // Devrait retourner true (2 est un nombre premier)
var_dump(my_is_prime(4));   // Devrait retourner false (4 est divisible par 2)
var_dump(my_is_prime(17));
?>
<?php

    function par_impar($age){
        if($age % 2 === 0){
            $message = "Tu edad($age) es un número par";
        }else{
            $message = "Tu edad($age) es un número impar";
        }
        return ($message);
    }

    echo par_impar(21);
    echo '<br>';
    echo par_impar(20);

?>
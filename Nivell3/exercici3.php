<?php

    function eratostenes($num){
        $numeros = array();
        for($i = 2; $i <= $num; $i++){
            if($i % 2 !== 0){
                array_push($numeros, $i);
            };
        };

        $numeros2 = array(2, 3);
        foreach($numeros as $value){
            if(($value * $value) < $num){
                foreach($numeros as $item){
                    if($item % $value !== 0){
                        array_push($numeros2, $item);
                    }
                }
            }
        }

        foreach($numeros2 as $value){
            echo "<li>$value</li>";
        }
    }

    echo "<h4>La criba de Eratóstanes</h4>";
    eratostenes(20);

?>
<?php

    function eratostenes($num){
        $numeros = array();
        for($i = 2; $i <= $num; $i++){
            if($i % 2 !== 0 || $i === 2){
                array_push($numeros, $i);
            };
        };

        $i = 0;
        while(($numeros[$i] * $numeros[$i]) < $num){
            $num_mult = $numeros[$i];
            foreach($numeros as $key =>$value){
                if($numeros[$key] % $num_mult === 0 && $numeros[$key] !== $num_mult){
                    unset($numeros[$key]);
                }
            }
            $i++;
        }

        foreach($numeros as $primo){
            echo "<li>$primo</li>";
        }
    }

    echo "<h4>La criba de Eratóstanes</h4>";
    eratostenes(40);

?>
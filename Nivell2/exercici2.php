<?php

function amagatall($num){
    for($i = 2; $i <= $num; $i+=2){
        echo "<li>Nº: $i</li>";
    }
}

amagatall(16);

?>
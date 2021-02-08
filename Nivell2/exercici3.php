<?php

function amagatall($num = 10){
    for($i = 2; $i <= $num; $i+=2){
        echo "<li>Nº: $i</li>";
    }
}

echo "Soy la llamada que muestra el parámetro por defecto";
amagatall();
echo '<hr>';
echo "Soy la llamada que da un argumento diferente al parámetro por defecto";
amagatall(16);

?>
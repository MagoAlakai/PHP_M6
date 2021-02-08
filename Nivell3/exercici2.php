<?php

    function xocolata($cantidad){
        return ($cantidad * 1);
    }

    function xiclets($cantidad){
        return ($cantidad * 0.50);
    }

    function caramels($cantidad){
        return ($cantidad * 1.50);
    }

    function total($xocolata , $xiclets, $caramels ){
        return "El total es: ".(xocolata($xocolata) + xiclets($xiclets) + caramels($caramels));
    }

    echo total(2, 1, 1);

?>
<?php
/* Crear una función que permita recibir un arreglo de 20 números como parámetro. En dicha función, 
mostrar la suma de todos los números. */

$aregloNumeros = array(2,32,4,3,1,1,4,1,4,13,4,123,312,45,73,63,6,6,3,6,7,3,3,2,5,6,);
function sumarNumeros ($aregloNumeros){
    $suna = 0;
    for ($i=0; $i <= $aregloNumeros; $i++) { 
        
       
        $suna += $arregloNumeros[$i];
    };
    echo $suna;


}


sumarNumeros($aregloNumeros);
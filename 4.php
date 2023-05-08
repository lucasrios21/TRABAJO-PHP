<?php
/* 4. Desarrollar una función que calcule el IVA aplicable a un producto, la función debe recibir el total del 
producto y el IVA para aplicar, sino no se pasa un IVA, por defecto deberá tener 10%.
 */

 function calculaIvaProducto($valorproduct, $iva = 0.10){
    $ivaProducto = $valorproduct * $iva;
    $total = $ivaProducto + $valorproduct;
    echo "El IVA de su producto es: ", $ivaProducto, ". El total a pagar es: ", $total, ".";
}

$valorproduct = 1000;
$iva = 0.12;

calculaIvaProducto($valorproduct,$iva);
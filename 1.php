<?php

/*1. Crea una clase "Empleado" que tenga las propiedades "nombre", "salario" y "departamento". A
continuación, crea un método dentro de la clase llamado "aumentar salario" que permita al usuario
aumentar el salario del empleado en un porcentaje determinado. Luego, crea una instancia de esa
clase y prueba el método.*/

class Empleado{
    private $nombre;
    private $salario;
    private $departamento;

    public function __construct($salario,$nombre,$departamento){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this ->departamento = $departamento;
    }

    public function aumentarSalario(){
        $aumento = $this->salario* 0.50 + $this->salario ;
        echo "Su nuevo Salario es: $aumento";

    }
}



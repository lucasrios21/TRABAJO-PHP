<?php
/*Crea una clase "Estudiante" que tenga las propiedades "nombre", "edad" y "calificación". A 
continuación, crea un método dentro de la clase llamado "actualizar calificación" que permita al 
usuario actualizar la calificación del estudiante. Luego, crea una instancia/objeto de esa clase y prueba 
el método.*/

class Estudiante{
    private $nombre;
    private $edad;
    private $calificacion;

    public function __construct($nombre,$edad,$calificacion){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this ->calificacion = $calificacion;
    }

    public function actualizarCalificacion(){
        echo " $this->nombre   tu nota anterior era: 3,8 <br>";
        echo "Tu nota ha actualizado a $this->calificacion";
    }

}



<?php

/*Crea una clase "Libro" que tenga las propiedades "título", "autor" y "año de publicación". A 
continuación, crea un método dentro de la clase llamado "mostrar detalles" que muestre toda la 
información del libro. Luego, crear un método que permita comparar 2 libros y determinar cuál tienen 
más páginas. Finalmente crea una instancia/objeto de esa clase y prueba ambos métodos.*/

class Libro{
    private $titulo;
    private $autor;
    private $anoPublicacion;
    private $numpag;

    public function __construct($titulo,$autor,$anoPublicacion,$numpag){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this ->anoPublicacion = $anoPublicacion;
        $this ->numpag = $numpag;
    }

    public function mostrarDetalles(){
        echo "Detalles del libro", $this->titulo;
        echo"Autor: $this->autor <br>";
        echo"Año de publicación: $this->anoPublicacion";
    }   

    
    

        public function comparar_libros(Libro1 $libro2) {

    if ($this->numpag > $libro2->numpag) {
        echo $this->titulo . " tiene más páginas que " . $libro2->titulo . ".";
    } else if ($this->numpag < $libro2->numpag) {
        echo $libro2->titulo . " tiene más páginas que " . $this->titulo . ".";
    } else {
        echo "Tiene la misma cantidad";
    }
}


    } 
  

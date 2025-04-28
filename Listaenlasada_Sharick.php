<?php

class Nodo{
    public $dato;
    public $siguiente;
    public function __construct($dato) {
        $this->dato = $dato;
        $this->siguiente = null;
    }
}

class listasfrutas{
    public $head;
    public function __construct(){
       $this->head = null;
    }

    public function insertar($dato){
        $nuevoNodo = new Nodo($dato);
        $nuevoNodo->siguiente = $this->head;
        $this->head = $nuevoNodo;
    }
    
    public function imprimirHTML(){
        $actual = $this->head;
        echo "<ul>";
        
        while($actual != null){
            echo "<li>" . $actual->dato . "</li>";
            $actual = $actual->siguiente;
        }
        echo "</ul>";
    }
}

$lista = new listasfrutas();

$lista->insertar("Guayaba");
$lista->insertar("Pera");
$lista->insertar("Banano");
$lista->imprimirHTML();

?>
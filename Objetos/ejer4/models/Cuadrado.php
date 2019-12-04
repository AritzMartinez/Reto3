<?php
require_once "Poligono.php";

class Cuadrado extends Poligono{

    public function area(){
        echo "El area del cuadrado es :".$this->getAltura() ." ". $this->getAnchura();
    }
}

?>
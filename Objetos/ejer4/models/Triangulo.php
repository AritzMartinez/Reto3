<?php
require_once "Poligono.php";

class Triangulo extends Poligono{
    public function area(){
        echo "El area del triangulo es :".$this->getAltura() ." ". $this->getAltura();
    }
}

?>

<?php
abstract class Poligono {
    private $color,$altura,$anchura;

    function __construct($color,$altura,$anchura){
        $this->color=$color;
        $this->altura=$altura;
        $this->anchura=$anchura;

    }
     abstract public function area ();
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getAnchura()
    {
        return $this->anchura;
    }

    /**
     * @param mixed $anchura
     */
    public function setAnchura($anchura): void
    {
        $this->anchura = $anchura;
    }

}

?>
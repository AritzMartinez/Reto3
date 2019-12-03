<?php
namespace Objetos\Models;
class  Publicacion{

    private $autores, $año, $editorial, $titulo, $texto;
    // constructor
    public function __construct($autores, $año, $editorial, $titulo, $texto) {
        $this->autores = $autores;
        $this->año = $año;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto= $texto;
    }
    public function leer(){
        echo $this->texto;
    }

    public function escribir($string){
        echo  $this->leer() ."-". $string;
    }

    /**
     * @return mixed
     */
    public function getAutores()
    {
        return $this->autores;
    }

    /**
     * @param mixed $autores
     */
    public function setAutores($autores): void
    {
        $this->autores = $autores;
    }

    /**
     * @return mixed
     */
    public function getAño()
    {
        return $this->año;
    }

    /**
     * @param mixed $año
     */
    public function setAño($año): void
    {
        $this->año = $año;
    }

    /**
     * @return mixed
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * @param mixed $editorial
     */
    public function setEditorial($editorial): void
    {
        $this->editorial = $editorial;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setTexto($texto): void
    {
        $this->texto = $texto;
    }

}

?>
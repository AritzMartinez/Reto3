<?php
class User {
    protected $username,$nombre,$apellidos,$email,$password,$ultimo_acceso;

    /**
     * User constructor.
     * @param $username
     * @param $nombre
     * @param $apellidos
     * @param $email
     * @param $password
     * @param $ultimo_acceso
     */
    public function __construct($username, $nombre, $apellidos, $email, $password, $ultimo_acceso)
    {
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimo_acceso = $ultimo_acceso;
    }


    function login(){

    }
    function logout(){

    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUltimoAcceso()
    {
        return $this->ultimo_acceso;
    }

    /**
     * @param mixed $ultimo_acceso
     */
    public function setUltimoAcceso($ultimo_acceso): void
    {
        $this->ultimo_acceso = $ultimo_acceso;
    }






}
?>
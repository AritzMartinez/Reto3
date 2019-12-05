<?php
class Admin extends User{
    private $admin_level;

    /**
     * Admin constructor.
     * @param $admin_level
     */
    public function __construct($admin_level)
    {
        $this->admin_level = $admin_level;
    }

    /**
     * @return mixed
     */
    public function getAdminLevel()
    {
        return $this->admin_level;
    }

    /**
     * @param mixed $admin_level
     */
    public function setAdminLevel($admin_level): void
    {
        $this->admin_level = $admin_level;
    }


    function desactivarUsuario(){

    }





}





?>
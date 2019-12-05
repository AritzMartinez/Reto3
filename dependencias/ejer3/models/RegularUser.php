<?php
class RegularUser extends User{
    private $twitter,$instagram;

    /**
     * RegularUser constructor.
     * @param $twitter
     * @param $instagram
     */
    public function __construct($twitter, $instagram)
    {
        $this->twitter = $twitter;
        $this->instagram = $instagram;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter): void
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * @param mixed $instagram
     */
    public function setInstagram($instagram): void
    {
        $this->instagram = $instagram;
    }


    function editarPerfil(){

    }

}
?>
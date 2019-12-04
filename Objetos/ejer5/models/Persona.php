<?php
class Persona{
    private static $personasEnElMundo = 0;

    /**
     * Persona constructor.
     */
    public function __construct(){
        self::$personasEnElMundo++;
    }

    public static function personaMundo(){
        echo self::$personasEnElMundo;
    }


}



?>


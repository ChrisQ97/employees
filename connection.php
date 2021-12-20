<?php

 /*
    Use PDO to connect DB
 */
    class DataBase{
        private static $instance=NULL;
        public static function createInstance(){
            if(!isset(self::$instance)){
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host=localhost;dbname=employees','remote','remote',$optionsPDO);
                echo "conexión realizada con exito";
            }
            return self::$instance;
        }
    }
?>
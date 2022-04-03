<?php

 /*
    Use PDO to connect DB
 */
    class DataBase{
        private static $instance=NULL;
        public static function createInstance(){
            if(!isset(self::$instance)){
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host=YOUR_HOST;dbname=employees','remote','remote',$optionsPDO); 
            }
            return self::$instance;
        }
    }
?>
<?php

if( isset($_GET["controller"]) && isset($_GET["action"]) ){
    $controller = $_GET["controller"];
    $action = $_GET["action"];

}
require_once("view/template.php");

?>
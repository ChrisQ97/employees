<?php
echo $controller;
echo $action;
include_once("controller/pages_controller.php");

$controller= new pagesController();
$controller->home();

?>
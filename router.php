<?php
/*
Este $controller es el  que recibimos en la petición
*/

include_once("controller/".$controller."_controller.php");

/*
Este $controller es completametne diferente del anterior $controller
*/
$objController = $controller."Controller";
$controller= new $objController();
$controller->$action();

?>



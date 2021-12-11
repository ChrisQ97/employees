<?php

class pagesController{
    public function home(){
        include_once("view/pages/home.php");
    }
    public function error(){
        include_once("view/pages/error.php");
    }
}

?>
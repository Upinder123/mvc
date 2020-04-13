<?php
Abstract Class baseController{
    /* registry type object*/
    function __construct($registry){
    $this->registry = $registry;
    }
    /*all classes must contain an index method*/
    abstract function index();
}
?>
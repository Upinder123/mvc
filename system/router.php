<?php
class router{
    private $registry;

    private $path;

    private $args =array();

    public $file;

    public $controller;

    public $action;

    function __construct($registry){
        $this-> registry = $registry;
    }

    function setPath($path){
        if(is_dir($path) == false ){
            throw new Exception ('Invalid controller path: `'.$path.'`');
        }
        /* set the path*/
        $this->path = $path;
    }
    function getController(){
        $route = $_SERVER['REQUEST_URI'];

        if (empty($route)){
            $route = 'index';
        }
        else
        {
            $parts = explode('/',$route);

            $this->controller=$parts[2];



            if (empty($this->controller)){
                $this ->controller = 'index';
            }
            // if(empty($this->action)){
            //     $this->action = $parts[3];
            // }
        }
        $this->file=__SITE_PATH.'/controllers/'.$this->controller.'Controller.php';
    }
public function loader(){

    $this->getController();

    if(is_readable($this->file) == false){
        die('404 Not Found');}

        // include the controllers
        include $this->file;

        // a new controller class instance 
        $class = $this->controller.'Controller';
        $controller = new $class($this->registry);

        // check if the action is callable
        if(is_callable(array($controller,$this->action)) == false )
        {
            $action = 'index';
        }
        else
        {
            $action = $this->action;
        }
        // action
       // $controller -> action(); 
    }
}


?>
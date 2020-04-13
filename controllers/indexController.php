<?php
class indexController Extends baseController{
    protected $registry;

    public function index(){

        $this->registry->template->welcome="welcome";
        $this->registry->template->show('index');
    }
}
?>
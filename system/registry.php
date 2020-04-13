<?php
class Registry{
    /*all vars in an array */
    private $vars = array();

    /* to append things in array hence variables*/
    public function __set($index,$value){
        $this->vars[$index] = $value;
    }
    /* to extract variables from array*/
    public function __get($index){
    
    return $this->vars[$index];
    }
}
?>
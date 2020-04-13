<?php
/* includes the controller class*/
include __SITE_PATH.'/system/'.'controller_base.php';
/* include the registry class */
include __SITE_PATH.'/system/'.'registry.php';
/* include the router class*/
include __SITE_PATH.'/system/'.'router.php';
/*include the template class*/
include __SITE_PATH.'/system/'.'template.php';

/* auto load model class */
function __autoload($class_name){
    $filename = strtolower($class_name).'.php';
    $file = __SITE_PATH.'/model/'.$filename;
    if(file_exists($file) == false){
        return false;
}
include ($file);
}
/* a new registry object*/
$registry = new registry;

/* create model instance */
// $registry ->db = db::getInstance();
?>
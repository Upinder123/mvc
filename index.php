<?php
/*error_reporting is the php error_reporting on off function n tell which level of error are reportes
n (E_ALL) tell all the levels n all level errors are to be reported*/
error_reporting(E_ALL);

/*define the site path*/

/*dirname returns the path of parent directory 2.) realpath sandardises the path with satangers n (__FILE__)returns the directory of the parent directory*/
$site_path = realpath(dirname(__FILE__));

/*Defines a constant */
define('__SITE_PATH',$site_path);

/* includes the init.php file */
include 'includes/init.php';

/* load the router */
$registry->router = new router($registry);

/*controller paths*/
$registry->router->setPath(__SITE_PATH.'/controllers');

/* load up the template */
$registry->template = new template($registry);

/* load the controller */
$registry->router->loader();
?>
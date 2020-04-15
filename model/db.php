<?php
class db{
    private static $instance = NULL;


    private function  __construct(){

    }
    public static function getInstance() {

        if (!self::$instance)
            {
            self::$instance = new PDO("mysql:host=localhost;dbname=periodic_table", 'username', 'password');;
            self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        return self::$instance;
        }
        
}
/*PDO php data object supports all the postgresql , mysql but if u want to use only mysql or maria db 
then mysqli so replacement*/
/* PDO Object Oriented only */
?>

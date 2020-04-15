<?php
class session{
/* sessions help us store data on the server than users computer so it is a more secure 
implementation as everything is given a session id  */
function __construct(){
session_start();
$_SESSION["start"] = time();// time of session start
$_SESSION["expire"] = $_SESSION["start"]+(30*60);// as time is in secons so time in seconds 
}
/*session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie*/ 

public function __set($index,$value){

    $_SESSION[$index] = $value;
}
/* to extract variables from array*/
public function __get($index){
if(isset($_SESSION[$index])){
return $_SESSION[$index];
}else{
    return null;
}
}
// to check whether expired or not 
public function isexpired(){
    if($_SESSION["expire"]==time()){
        session_destroy();
        return True;
    }
    else{
        return False;
    }
    }
}
/* sessions lead to a lot of loopholes so they need to be implemented carefully */
?>

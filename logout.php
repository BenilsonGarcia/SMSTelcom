<?php 
    if(!isset($_SESSION)):
     session_start(); 
    endif; 
    //destroy
     if(session_destroy()){
        echo("<script>location.href = 'login.php';</script>");
     }else{
        echo("<script>location.href = 'login.php';</script>");
     }


?>
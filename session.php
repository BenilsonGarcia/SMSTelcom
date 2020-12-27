<?php 
    if(!isset($_SESSION)):
     session_start(); 
    endif; 
    if(isset($_POST['usuario'])):
         $_SESSION['login_estado'] = 'online'; 
         $_SESSION['usuario'] =  $_POST['usuario']; 
         //header('Location:home.php');
         //header('Content-Type: application/json');
        
         echo json_encode('online');
    else:
        $_SESSION['login_estado'] = 'offline'; 
        echo json_encode('offline');
    endif;
   
?>;
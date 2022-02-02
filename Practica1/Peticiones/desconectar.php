<?php 
    session_start();
    unset($nombre, $apellido, $email, $user);  
    session_destroy();
    header('Location: http://127.0.0.1/Practica1/index.php');
?>
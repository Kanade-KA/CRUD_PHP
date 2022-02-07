<?php 
    include 'Conexion.php';
    session_start();
    $user=$_SESSION['user'];
    $sql= "UPDATE Usuario SET nombre='".$_POST["nombre"]."', apellido='".$_POST["apellido"]."', email='".$_POST["correo"]."',
    pass='".$_POST["pass"]."' where carnet = '".$user."';";
    $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
    header('Location: http://127.0.0.1/Practica1/perfil.php');
?>
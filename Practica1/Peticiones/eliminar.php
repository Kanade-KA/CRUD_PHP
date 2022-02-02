<?php 
    $user=$_GET['usuario'];
    $con=mysqli_connect('localhost', 'root', '', 'practicas') or die("NO SE PUDO CONECTAR D:");
    $sql= "DELETE FROM Usuario where carnet = '".$user."';";
    $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
    header('Location: http://127.0.0.1/Practica1/super.php');
?>
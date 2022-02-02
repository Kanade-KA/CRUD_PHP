<?php 
    session_start();
    $user=$_SESSION['user'];
    $con=mysqli_connect('localhost', 'root', '', 'practicas') or die("NO SE PUDO CONECTAR D:");
    $sql= "UPDATE Usuario SET nombre='".$_POST["nombre"]."', apellido='".$_POST["apellido"]."', email='".$_POST["correo"]."',
    pass='".$_POST["pass"]."' where carnet = '".$user."';";
    $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
    $_SESSION['nombre']=$_POST["nombre"];
    $_SESSION['apellido']=$_POST["apellido"];
    $_SESSION['email']=$_POST["correo"];
    $_SESSION['pass']=$_POST["pass"];
    header('Location: http://127.0.0.1/Practica1/perfil.php');
?>
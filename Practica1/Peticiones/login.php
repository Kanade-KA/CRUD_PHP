<?php 
    include 'Conexion.php';
    $sql= "SELECT * FROM Usuario where carnet = '".$_POST["usuario"]."' and pass = '".$_POST["contra"]."';";
    if($_POST["usuario"]=="super" && $_POST["contra"]=="super"){
        session_start();
        $_SESSION['user']="super";
        header('Location: http://127.0.0.1/Practica1/super.php');
    }
    $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
    if($resultado->num_rows==1)
    {
        session_start();
        while ($var_fila=$resultado->fetch_array())
        {
            $_SESSION['user']=$var_fila["carnet"];
            header('Location: http://127.0.0.1/Practica1/perfil.php');
        }
    }
    else
    {
        echo '<script>
            alert("Usuario o contraseña incorrecta D:");
            window.location.href="http://127.0.0.1/Practica1/index.php";
            </script>';
    }
?>
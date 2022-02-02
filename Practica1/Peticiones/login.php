<?php 
    
    $con=mysqli_connect('localhost', 'root', '', 'practicas') or die("NO SE PUDO CONECTAR D:");
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
            $_SESSION['nombre']=$var_fila["nombre"];
            $_SESSION['apellido']=$var_fila["apellido"];
            $_SESSION['email']=$var_fila["email"];
            $_SESSION['user']=$var_fila["carnet"];
            $_SESSION['pass']=$var_fila["pass"];
            header('Location: http://127.0.0.1/Practica1/perfil.php');
        }
    }
    else
    {
        echo "No hay Registros";
    }
?>
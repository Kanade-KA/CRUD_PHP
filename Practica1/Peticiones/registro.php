<?php 
    
    $con=mysqli_connect('localhost', 'root', '', 'practicas') or die("NO SE PUDO CONECTAR D:");
    $sql= "INSERT INTO Usuario(carnet, nombre, apellido, email, pass)
    VALUES ('".$_POST["carnet"]."','".$_POST["nombre"]."', '".$_POST["apellido"]."', '".$_POST["correo"]."', '".$_POST["pass1"]."');";
    #CON ESTO VERIFICAMOS SI YA ESTÁ USADO ESE USUARIO
    $verificausuario="SELECT * FROM Usuario where carnet = '".$_POST["carnet"]."' or email = '".$_POST["correo"]."';";

    if ($_POST["pass1"] == $_POST["pass2"]){
        $hayusuario=mysqli_query($con, $verificausuario);
        if($hayusuario->num_rows==1)
        {
            header('Location: http://127.0.0.1/Practica1/Registrar.php');
            echo "Ya existe este usuario";
        }
        else
        {
            $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
            header('Location: http://127.0.0.1/Practica1/index.php');
        }
    }else{
        echo'<script type="text/javascript">
            alert("Tarea Guardada");
            window.location.href="http://127.0.0.1/Practica1/registro.php";
            </script>';
    }
?>
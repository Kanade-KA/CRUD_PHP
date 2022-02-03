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
            echo '<script>
            alert("Error, ya existe un usuario con ese numero de carnet o correo D:");
            window.location.href="http://127.0.0.1/Practica1/Registrar.php";
            </script>';
        }
        else
        {
            $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
            header('Location: http://127.0.0.1/Practica1/index.php');
        }
    }else{
        echo '<script>
            alert("Error, las contraseñas no coinciden D:");
            window.location.href="http://127.0.0.1/Practica1/Registrar.php";
            </script>';
    }
?>
<html>
<head>
    <title>Mi perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:#CACFD2;">
    <nav class="navbar navbar-light bg-light justify-content-end">
    <img src="https://seeklogo.com/images/U/universidad-de-san-carlos-de-guatemala-logo-4B7C23A157-seeklogo.com.png" width = "100px">
        <h1 class="navbar-brand">FACULTAD DE DERECHO <br> CENTRO DE CALCULO</h1>
        <form style="padding-left:55%;">
            <a class="btn btn-outline-success my-2 my-sm-0" href="editar.php">Editar Perfil</a>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-outline-danger my-2 my-sm-0" href="Peticiones/desconectar.php">Cerrar Sesión</a>
        </form>
    </nav>
    <div style="display:flex; justify-content:left; margin-left:2%; margin-top:2%;">
        <?php
            include 'Peticiones/Conexion.php';
            session_start();
            if (is_null($_SESSION['user'])){
                header('Location: http://127.0.0.1/Practica1/index.php');
            }else{
                    if($_SESSION['user'] == "super"){
                        header('Location: http://127.0.0.1/Practica1/index.php');
                    }
                $sql = "SELECT nombre, apellido, email FROM Usuario WHERE carnet = '".$_SESSION['user']."';";
                $resultado = mysqli_query($con, $sql);
                while ($datos = $resultado->fetch_array())
                    {
                        echo '<p>';
                        echo "Carnet: ".$_SESSION['user'];
                        echo nl2br("\n" .$datos['nombre']);
                        echo '&nbsp;';
                        echo $datos['apellido'];
                        echo nl2br("\n" .$datos['email']);
                        echo '</p>';
                    }
            }
        ?>
    </div>
   <div style="display:flex; justify-content:center;">
        <div style="justify-content:center;">
            <h3 style="text-align:center;">PERSONAS</h3>
            <?php
                $sql= "SELECT nombre, apellido, email, carnet FROM Usuario;";
                $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
                if($resultado->num_rows>0)
                {
                    echo '<table class="table table-bordered">';
                    echo '<thead class="thead-dark">';
                    echo '<th>Nombre</th>';
                    echo '<th>Apellido</th>';
                    echo '<th>Correo</th>';
                    echo '<th>Carnet</th>';
                    echo '</thead>';
                    while ($var_fila=$resultado->fetch_array())
                    {
                        if ($var_fila['carnet'] == $_SESSION['user']){
                            continue;
                        }
                        echo '<tr>';
                        echo '<td>';
                        echo $var_fila['nombre'];
                        echo '</td>';
                        echo '<td>';
                        echo $var_fila['apellido'];
                        echo '</td>';
                        echo '<td>';
                        echo $var_fila['email'];
                        echo '</td>';
                        echo '<td>';
                        echo $var_fila['carnet'];
                        echo '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                }
                else
                {
                    echo "No hay Registros";
                }
            ?>
        </div>
   </div>
</body>
</html>
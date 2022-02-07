<html>
<head>
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:#CACFD2;">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <img style="float:left;" src="https://seeklogo.com/images/U/universidad-de-san-carlos-de-guatemala-logo-4B7C23A157-seeklogo.com.png" width = "100px">
        <h1 class="navbar-brand" style="float:left; margin-left:1%;">FACULTAD DE DERECHO <br> CENTRO DE CALCULO</h1>
        <form class="form-inline">
            <a class="btn btn-outline-danger my-2 my-sm-0" href="Peticiones/desconectar.php">Cerrar Sesión</a>
        </form>
    </nav>
    <div style="display:flex; justify-content:center;">
        <?php
            include 'Peticiones/Conexion.php';
            session_start();
            if (is_null($_SESSION['user'])){
                header('Location: http://127.0.0.1/Practica1/index.php');
            }else{
                if($_SESSION['user'] != "super"){
                    header('Location: http://127.0.0.1/Practica1/index.php');
                }
            }
        ?>
        <h2>SUPER USUARIO</h2>
    </div>
   <div style="display:flex; justify-content:center;">
        <div style="justify-content:center; text-align:center;">
            <h3>ESTUDIANTES</h3>
            <?php
                $sql= "SELECT nombre, apellido, email, carnet FROM Usuario;";
                $resultado = mysqli_query($con, $sql) or die("ERROR NO SE PUDO REALIZAR LA CONSULTA D:");
                if($resultado->num_rows>0)
                {
                    echo '<table class="table table-bordered">';
                    echo '<thead class="thead-dark">';
                    echo '<th>Carnet</th>';
                    echo '<th>Usuario</th>';
                    echo '<th>Correo</th>';
                    echo '</thead>';
                        while ($var_fila=$resultado->fetch_array())
                        {?>
                            <tr>
                                <td> <?php echo $var_fila['carnet'];?> </td>
                                <td> <?php echo $var_fila['nombre']; echo '&nbsp;'; echo $var_fila['apellido'];?></td>
                                <td> <?php echo $var_fila['email'];?></td>
                                <td> <a href="Peticiones/eliminar.php?usuario=<?php echo $var_fila['carnet'];?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg></a></td>
                            </tr>
                <?php  }
                    echo '</table>';
                }else
                {
                    echo "No hay Registros";
                }?>
        </div>
   </div>
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
<html>
<head>
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:#CACFD2;">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <img style="float:left;" src="https://seeklogo.com/images/U/universidad-de-san-carlos-de-guatemala-logo-4B7C23A157-seeklogo.com.png" width = "100px">
        <h1 class="navbar-brand" style="float:left; margin-left:1%;">FACULTAD DE DERECHO <br> CENTRO DE CALCULO</h1>
        <form class="form-inline">
            <a class="btn btn-outline-danger my-2 my-sm-0" href="perfil.php">Cancelar</a>
         </form>
    </nav>
   <div style="display:flex; justify-content:center; margin-top:10%;">
        <h3>ACTUALIZAR DATOS</h3>
   </div>
   <div style="display:flex; justify-content:center;">
        <div style="justify-content:center;">
        <br>
                <form action="Peticiones/update.php" method="POST">
                    <?php
                        include 'Peticiones/Conexion.php';
                        session_start();
                        $sql = "SELECT nombre, apellido, email, pass FROM Usuario WHERE carnet = '".$_SESSION['user']."';";
                        $resultado = mysqli_query($con, $sql);
                        while ($datos = $resultado->fetch_array())
                        {
                            $name = "\"".$datos['nombre']."\"";
                            $lastname = "\"".$datos['apellido']."\"";
                            $email = $datos['email'];
                            $pass = $datos['pass'];
                    ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" name="nombre" value=<?php echo $name;?>>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Apellido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" name="apellido" value=<?php echo $lastname;?>>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <input type="text" class="form-control" name="correo" value=<?php echo $email;?>>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Contraseña</span>
                        </div>
                        <input type="password" class="form-control" name="pass" value=<?php echo $pass;?>>
                    </div>
                    <input type="submit" class="btn btn-secondary" value="Guardar Cambios" style="width:100%">
                    <?php
                    }
                    ?>
                </form>
        </div>
   </div>
</body>
</html>
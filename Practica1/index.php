<html>
<head>
    <title>Facultad de Derecho</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:#CACFD2;">
    <nav class="navbar navbar-light bg-light">
        <img style="float:left;" src="https://seeklogo.com/images/U/universidad-de-san-carlos-de-guatemala-logo-4B7C23A157-seeklogo.com.png" width = "100px">
        <h1 class="navbar-brand" style="text-align:right; margin-left:2%;">FACULTAD DE DERECHO <br> CENTRO DE CALCULO</h1>
    </nav>
    <div style="display:flex; justify-content:center; margin-top:10%;">
        <?php
            session_start();
            if (isset($_SESSION['user'])){
                if ($_SESSION['user'] == "super"){
                    header('Location: http://127.0.0.1/Practica1/super.php');
                }else{
                    header('Location: http://127.0.0.1/Practica1/perfil.php');
                }
            }
        ?>
            <h2>LOGIN</h2>
    </div>
    <div style="display:flex; justify-content:center;">
        <div style="justify-content:center;">
        <form action="Peticiones/login.php" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="usuario">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Contraseña</span>
                    </div>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="contra">
                </div>
                <input type="submit" class="btn btn-secondary" value="Ingresar" style="width:100%">
            </form>
            <input type="submit" class="btn btn-secondary" value="¿No tienes una cuenta?" style="width:100%" onclick="location.href='http://127.0.0.1/Practica1/Registrar.php'">
        </div>
    </div>
<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
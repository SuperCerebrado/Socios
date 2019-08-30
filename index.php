<!--
/*
*                       Leonardo Emanuel Espinoza
*                           $index-php
*                   Ultima modificacion : 29/07/2019
*                           Version: 1.0
*/
-->
<?php 
    session_start();
    if(isset($_SESSION["user"])){
        header("location: vistas/home.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="style/index.css" >
    <title>Login</title>
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sw-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/usuario.png" id="user-group">
                </div>
                <form class="cold-12" action="login.php" method="POST">
                    <div class="form-group" id="usuario-group" >
                        <input type="text" name="usuario" class="fore-control" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group" id="contraseña-group">
                        <input type="password" name="clave" class="fore-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" name="iniciar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="cold-12 forgot">
                    <a href="#">Recordar contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
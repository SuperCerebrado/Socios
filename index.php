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
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <input type="text" placeholder="Usuario" name="usuario" />
        <input type="password" placeholder="Contraseña" name="clave" />
        <br>
        <input type="submit" value="Iniciar Sesion" name="iniciar"/>
    </form>
    <br><br><br><br><br>
    <footer class="blockquote-footer">Realizado por SuperClan: 
        <cite title="Source Title">Leonardo Emanuel Espinoza</cite>
    </footer>
</body>
</html>  
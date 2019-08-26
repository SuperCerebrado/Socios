<?php
    $servidor = "localhost:3306";
    $usuario = "root";
    $password = "";
    $baseDeDatos = "socios1.3";
    
    try {
        // Crea la conexion con el servidor    
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
    } catch (PDOException $excepcion) {
        echo 'Falló la conexión: ' . $excepcion->getMessage();
    }

?>

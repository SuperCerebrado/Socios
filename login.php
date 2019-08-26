<?php 
    session_start();
    
    include "include/db.php";
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND clave = :clave";
        $consulta=$conexion->prepare($sql); 
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $consulta->execute(array(':usuario' => $usuario, ':clave' => $clave));
        
        $numero_registro=$consulta->rowCount();//recorre los registros
        if($numero_registro!=0){
            $_SESSION["user"] = $usuario;
            header("location: vistas/menu.php");
        }else{
            header("location: index.php");
        }
?>
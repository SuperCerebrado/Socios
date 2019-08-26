<?php
    session_start();
	include "include/db.php";
	try { 
        if(isset($_REQUEST['id'])){
            // Seteamos los parametros
            $id=$_REQUEST['id'];// obtener id y almacenar en $ id variable
            $select= $conexion->prepare('SELECT * FROM tabla WHERE Id =:id'); 
            $select->bindParam(':id',$id);
            $select->execute();
            $row=$select->fetch(PDO::FETCH_ASSOC);
            
            // borrar un registro original de db
            $delete = $conexion->prepare('DELETE FROM tabla WHERE Id =:id');
            $delete->bindParam(':id',$id);
            $delete->execute();
        }
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     
    $delete = null;
    
    header("location: vistas/home.php");
?>
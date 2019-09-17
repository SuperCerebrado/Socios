<?php
   session_start();
   include "include/db.php";
	//Seteamos las variables
try {
    $id=$_POST['id'];
    $numeroSocio=$_POST['numeroSocio'];
    $calle =$_POST['calle'];
    $altura=$_POST['altura'];
    $pago=$_POST['pago'];
    $pago2=$_POST['pago2'];
    $horario=$_POST['horario'];
    $zona=$_POST['zona'];
    
	//imagen
    $select = $conexion->prepare('SELECT * FROM tabla WHERE Id =:id'); 
    $select->bindParam(':id',$id);
    $select->execute(); 
    $row = $select->fetch();
    //extract($row);

    $sentenciaSql = "UPDATE tabla SET N°='$numeroSocio', Calle = '$calle', Altura='$altura', Pago='$pago', Pago2='$pago2', Horario='$horario', Zona='$zona' WHERE Id='$id'";
    $update = $conexion->prepare($sentenciaSql);              
    $update->execute();
    //var_dump( $sentenciaSql);
    $update = null;
    //echo "hola";
    require "include\db.php";
    header("location: vistas/home.php");
} catch( PDOExecption $excepcion) { 
	echo "<h2>Error: $excepcion->getMessage()</h2>";
}     
?>
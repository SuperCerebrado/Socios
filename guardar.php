<?php
    session_start();
    include "include/db.php";
    
    try { 
        $id=$_POST['id'];
        $numeroSocio=$_POST['numeroSocio'];
        $calle =$_POST['calle'];
        $altura=$_POST['altura'];
        $pago=$_POST['pago'];
        $horario=$_POST['horario'];
        /*if($_POST['pago'] == "130"){
            $pago = 130;
        }elseif($_POST['pago'] == "150"){
            $pago = 150;
        }else{
            $pago=0;
        }
        if($_POST['cobro2'] == "130"){
            $cobro2 = 130;
        }elseif($_POST['cobro2'] == "150"){
            $cobro2 = 150;
        }else{
            $cobro2=0;
        }*/
    
        $insert = $conexion->prepare("INSERT INTO tabla (N°, Calle, Altura, Pago, Horario) VALUES ('$numeroSocio', '$calle', '$altura', '$pago', '$horario')");
        $insert->execute();

        header("location: vistas/home.php");
        
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     
?>

<?php
    session_start();
    include "include/db.php";
    
    try { 
        $id=$_POST['id'];
        $numeroSocio=$_POST['numeroSocio'];
        $calle =$_POST['calle'];
        $altura=$_POST['altura'];
        $pago=$_POST['pago'];
        $pago2=$_POST['pago2'];
        $horario=$_POST['horario'];
        $zona=$_POST['zona'];
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
    
        $insert = $conexion->prepare("INSERT INTO tabla (N°, Calle, Altura, Pago, Pago2, Horario, Zona) VALUES ('$numeroSocio', '$calle', '$altura', '$pago', '$pago2','$horario', '$zona')");
        $insert->execute();

        //header("location: vistas/home.php");
        
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    }     
?>
<script type="text/javascript">//eliminar con cartel de alert y volver al index
	alert("Registro Guardado");
	window.location.href='vistas/home.php';
</script>

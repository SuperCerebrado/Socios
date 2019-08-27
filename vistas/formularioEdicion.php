<?php
    session_start();
    include "../include/db.php";
    if(!isset($_SESSION["user"])){
        header("location: ../index.php");
    }

    try {
        //tomo por get el id del formulario
        if (isset($_REQUEST['id'])) {
            $sql= "SELECT T.*, C.Nombre FROM tabla T INNER JOIN calles C ON C.Id = T.Calle WHERE T.Id = ?";
            //$sql = 'SELECT * FROM clientes WHERE Id = ?';
            $stmt = $conexion->prepare($sql);
            $results = $stmt->execute(array($_REQUEST['id']));
            $row = $stmt->fetch();
            if (empty($row)) {
                $result = "No se encontraron resultados !!";
            }
        }
    } catch( PDOExecption $excepcion) { 
        echo "<h2>Error: $excepcion->getMessage()</h2>";
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="description" content=" CRUD(Crear, Leer, Actualizar y Borrar)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Socios</title>
</head>
<body>
    <!-- Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <form id="formulario" method="POST" name="Formulario" enctype='multipart/form-data' action="../editar.php"> 
        <input type='hidden' name='id' value="<?php echo $row['Id'];?>">
        <h2>Editar Socio</h2></legend>
        <label><b>N° Socio: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="number" name="numeroSocio" min="1" max="10000" autofocus value="<?php echo $row['N°']?>" >
        </br>
        </br>
        <label>Calle: &nbsp;</label>
        <select name="calle" autofocus value="<?php echo $row['Calle']?>"><!--Ccombo-->
            <?php
                // Armo la consulta
                $consulta = $conexion->prepare("SELECT * FROM calles ORDER BY Nombre");
                $consulta->execute();
                $resultado = $consulta->fetchAll();
                //recorro
                foreach ($resultado as $registro) {
                    if($row['Calle']==$registro['Id']){
                        echo "<option selected value='".$registro['Id']."'>".$registro['Nombre']."</option>"; 
                    }else{
                        echo "<option value='".$registro['Id']."'>".$registro['Nombre']."</option>"; 
                    }
                }
            ?>
        </select>
        </br>
        </br>
        <label>Altura: &nbsp;</label>
        <input type="number" name="altura" min="1" max="10000" autofocus value="<?php echo $row['Altura']?>" >
        </br>
        </br>
        <label>Paga: &nbsp;</label>
        <?php
            if($row['Pago']==120){
                echo "<input type='radio' name='pago' value='120' checked>120 &nbsp;&nbsp;";
                echo "<input type='radio' name='pago' value='150' >150 &nbsp;&nbsp;";
            }else{
                echo "<input type='radio' name='pago' value='120' >120 &nbsp;&nbsp;";
                echo "<input type='radio' name='pago' value='150' checked>150 &nbsp;&nbsp;";
            }
        ?>
        </br>
        </br>
        <label>Horario: &nbsp;</label>
        <?php
            if($row['Horario']=="Mañana"){
                echo "<input type='radio' name='horario' value='Mañana' checked>Mañana &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Tarde' >Tarde &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Noche' >Noche &nbsp;&nbsp;";
            }elseif($row['Horario']=="Tarde"){
                echo "<input type='radio' name='horario' value='Mañana' >Mañana &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Tarde' checked>Tarde &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Noche' >Noche &nbsp;&nbsp;";
            }else{
                echo "<input type='radio' name='horario' value='Mañana' >Mañana &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Tarde' >Tarde &nbsp;&nbsp;";
                echo "<input type='radio' name='horario' value='Noche' checked>Noche &nbsp;&nbsp;";
            }
        ?>
        </br>
        </br>
        <label>Zona: &nbsp;</label>
        <?php
            if($row['Zona']=='zona1'){
                echo "<input type='radio' name='zona' value='zona1' checked>zona1 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona2' >zona2 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona3' >zona3 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona4' >zona4 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona5' >zona5 &nbsp;&nbsp;";
            }elseif($row['Zona']=='zona2'){
                echo "<input type='radio' name='zona' value='zona1' >zona1 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona2' checked>zona2 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona3' >zona3 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona4' >zona4 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona5' >zona5 &nbsp;&nbsp;";
            }elseif($row['Zona']=='zona3'){
                echo "<input type='radio' name='zona' value='zona1' >zona1 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona2' >zona2 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona3' checked>zona3 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona4' >zona4 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona5' >zona5 &nbsp;&nbsp;";
            }elseif($row['Zona']=='zona4'){
                echo "<input type='radio' name='zona' value='zona1' >zona1 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona2' >zona2 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona3' >zona3 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona4' checked>zona4 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona5' >zona5 &nbsp;&nbsp;";
            }else{
                echo "<input type='radio' name='zona' value='zona1' >zona1 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona2' >zona2 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona3' >zona3 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona4' >zona4 &nbsp;&nbsp;";
                echo "<input type='radio' name='zona' value='zona5' checked>zona5 &nbsp;&nbsp;";
            }
        ?>
        </br>
        </br>
        <input class="btn btn-primary" type="submit" name="Boton" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--con value cambiamos el nombre del boton que por defecto biene en enviar-->
        <a href='home.php'> <button type='button' class='btn btn-secondary'>Cancelar</button></a>
    </form>
</body>
</html>
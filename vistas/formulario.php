<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: ../index.php");
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
    <?php
        include "../include/db.php";
    ?>
    <form id="formulario" method="POST" name="Formulario" enctype='multipart/form-data' action="../guardar.php"> 
        <input type='hidden' name='id'>
        <h2>Registrar Socio</h2></legend>
        <label><b>N° de socio: &nbsp;</label><!-- &nbsp; nos crea un espacio en blanco de forma orizontal-->
        <input type="number" name="numeroSocio" autofocus required>
        </br>
        </br>
        <label>Calle: &nbsp;</label>
            <select name="calle" autofocus><!--Ccombo-->
                <?php
                    // Armo la consulta
                    $consulta = $conexion->prepare("SELECT * FROM calles ORDER BY Nombre");
                    $consulta->execute();
                    $resultado = $consulta->fetchAll();
                    //recorro
                    foreach ($resultado as $registro) {
                        echo "<option value='".$registro['Id']."'>".$registro['Nombre']."</option>";            
                    }
                ?>
            </select>
        </br>
        </br>
        <label>Altura: &nbsp;</label>
        <input type="number" name="altura" min="1" max="10000" autofocus >
        </br>
        </br>
        <label>Paga: &nbsp;</label>
        <!--<input type="radio" name="cobro1" value="0" checked>Aun No paga-->
        <input type="radio" name="pago" value=130 autofocus checked>130<!--Checkbox-->
        <input type="radio" name="pago" value=150 autofocus>150<!--Checkbox-->
        </br>
        </br>
        <label>Horario: &nbsp;</label>
        <input type="radio" name="horario" value="Mañana" checked>Mañana<!--Checkbox-->
        <input type="radio" name="horario" value="Tarde" autofocus>Tarde<!--Checkbox-->
        <input type="radio" name="horario" value="Noche" autofocus>Noche<!--Checkbox-->
        </br>
        </br>
        <input class="btn btn-primary" type="submit" name="Boton" value="Guardar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--con value cambiamos el nombre del boton que por defecto biene en enviar-->
        <a href='home.php'> <button type='button' class='btn btn-secondary'>Cancelar</button></a>
    </form>
</body>
</html>
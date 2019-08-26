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
    <!--<h1>Bienvenido <?php echo $_SESSION["user"]; ?></h1>-->
    <ul>
        <li><a href="../include/closeSession.php"><button type='button' class='btn btn-secondary'>Salir</button></a></li><br>
        <li><a href='menu.php'> <button type='button' class='btn btn-secondary'>Menu</button></a></li>
    </ul>
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <blockquote class="blockquote text-center">
        <h1>Lista de Socios</h1>
    </blockquote>
    <form class="form-inline" >
        <div class="form-group mx-sm-3 mb-2"> 
        <label for="inputPassword2" class="sr-only">Buscador2</label>
        <h3><strong>Buscar por:</strong></h3>&nbsp;&nbsp;
        <input type="text" name="termino" class="form-control" id="inputPassword2" placeholder="Nombre, Apellido, Calle">
        <!--<input type="number" name="termino2" class="form-control" id="inputPassword2" placeholder="Desde que Altura">-->
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <br>
    <br>
    <?php
        include_once '../include/db.php';
        //Corregir la consulta etc del buscador
        //$termino="";
        //$termino2=0;
        $sql = "SELECT T.*, C.Nombre FROM tabla T INNER JOIN calles C ON C.Id = T.Calle";
        if ((isset($_REQUEST["termino"]))/*||(isset($_REQUEST["termino2"]))*/) {
            $termino = $_REQUEST["termino"];
            //$termino2 = $_REQUEST["termino2"];
            $sql = "$sql WHERE (T.Altura LIKE '%$termino%') OR (T.Calle LIKE '%$termino%') OR (T.Horario LIKE '%$termino%') OR (C.Nombre LIKE '%$termino%') OR (T.N° LIKE '%$termino%') OR (T.Pago LIKE '%$termino%')";
            //$sql = "$sql WHERE C.Altura > $termino2";
            //(nombre LIKE 'fish') OR (stock <= 26);
        }
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();

        /*$total1=0;
        $total2=0;
        foreach ($resultado as $registro) {
            //si pago primer bimestre
            $total1= $total1+$registro["Cobro1"];
            $total2= $total2+$registro["Cobro2"];
        }
        $total=$total1+$total2;*/
        echo "<table class='table'>";
            echo "<thead class='thead-dark'>";
                echo "<tr>";
                    echo "<th scope='col'>N°</th>";
                    echo "<th scope='col'>Calle</th>";
                    echo "<th scope='col'>Altura</th>";
                    echo "<th scope='col'>Pago</th>";
                    echo "<th scope='col'>Horario</th>";
                    echo "<td scope='col'><a href='formulario.php'><button type='button' class='btn btn-success'>NUEVO</button></a></td>";
                echo "</tr>";
            echo "</thead>";
            foreach ($resultado as $registro) {
                //si pago primer bimestre
                /*$cobro1= $registro["Cobro1"];
                if($cobro1==0){
                    $cobro1='No';
                }elseif($cobro1==1){
                    $cobro1='Si';
                }
                //si pago segundo bimestre
                $cobro2 = $registro["Cobro2"];
                if($cobro2==0){
                    $cobro2='No';
                }elseif($cobro2==1){
                    $cobro2='Si';
                }*/
                echo "<thead class='thead-light' >";
                    echo "<tr>";
                        echo "<td scope='col'>".$registro['N°']."</td>";
                        echo "<td scope='col'>".$registro['Nombre']."</td>";
                        echo "<td scope='col'>".$registro['Altura']."</td>";
                        echo "<td scope='col'>".$registro['Pago']."</td>";
                        echo "<td scope='col'>".$registro['Horario']."</td>";
                        echo "<td scope='col'><a href='../eliminar.php?id=".$registro['Id']."'><button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
                        echo "<td scope='col'><a href='formularioEdicion.php?id=".$registro['Id']."'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                    echo "</tr>";
                echo "</thead>";
            }
        echo "</table>";

    
    //$consulta = null;
    ?>
</body>
</html>
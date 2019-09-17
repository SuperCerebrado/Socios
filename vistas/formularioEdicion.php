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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="../style/home.css" >
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
    <div class="container">
        <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
            <!--Pestañas-->
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Editar</a>				   	
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <!--cabeza-->
                    <div class="card">
						<h4>Editar Socio</h4>
					</div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST" action="../editar.php" >
                            <input type='hidden' name='id' value="<?php echo $row['Id'];?>">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">N°</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="number" name="numeroSocio" autofocus value="<?php echo $row['N°']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Calle</label>
                                <div class="col-lg-9">
                                    <select class="form-control" name="calle" autofocus value="<?php echo $row['Calle']?>"><!--Ccombo-->
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Altura</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="number" name="altura" min="1" max="10000" autofocus value="<?php echo $row['Altura']?>" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Paga</label>
                                <div class="col-lg-9">
                                    <!--<input type="radio" name="cobro1" value="0" checked>Aun No paga-->
                                    <?php
                                        if($row['Pago']==120){
                                            echo "<input type='radio' name='pago' value=0 >Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=120 checked>120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=150 >150 &nbsp;&nbsp;";
                                        }elseif($row['Pago']==150){
                                            echo "<input type='radio' name='pago' value=0 >Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=120 >120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=150 checked>150 &nbsp;&nbsp;";
                                        }else{
                                            echo "<input type='radio' name='pago' value=0 checked>Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=120 >120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago' value=150 >150 &nbsp;&nbsp;";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Paga2</label>
                                <div class="col-lg-9">
                                    <!--<input type="radio" name="cobro1" value="0" checked>Aun No paga-->
                                    <?php
                                        if($row['Pago2']==120){
                                            echo "<input type='radio' name='pago2' value=0 >Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=120 checked>120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=150 >150 &nbsp;&nbsp;";
                                        }elseif($row['Pago2']==150){
                                            echo "<input type='radio' name='pago2' value=0 >Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=120 >120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=150 checked>150 &nbsp;&nbsp;";
                                        }else{
                                            echo "<input type='radio' name='pago2' value=0 checked>Aun No paga &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=120 >120 &nbsp;&nbsp;";
                                            echo "<input type='radio' name='pago2' value=150 >150 &nbsp;&nbsp;";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Horario</label>
                                <div class="col-lg-9">
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Zona</label>
                                <div class="col-lg-9">
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
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-center">
                                    <input class="btn btn-primary" type="submit" value="Guardar">
                                    <input type="reset" class="btn btn-secondary" value="Recargar">
                                    <a href='home.php'> <button type='button' class='btn btn-secondary'>Cancelar</button></a>
                                    <!--<input type="button" class="btn btn-primary" value="Guardar">-->
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
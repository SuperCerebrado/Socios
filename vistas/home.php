<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="../style/home.css" >
	<!-- Nuestro JS-->
	<!--<link href="../style/select2.css" rel="stylesheet"/>--><!--para el select.css-->
	<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>--><!--select2 min css-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>--><!--select2 min js-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
	<!--<script src="../js/select2.js"></script>--><!--para el selec js-->
	<!--<script>
        $(document).ready(function() { 
			$("#sports").select2();});
    </script>-->
	<script type="text/javascript" >
	function eliminar() {
		var respuesta= confirm('Confirma que deseas borrar este registro.');
		if(respuesta == true){
			return true;
		}else{
			return false;
		}
  	}
	</script>
	<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<!-- DATA TABLE -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript">//para el buscador y la navegacion
	    $(document).ready(function() {
	        //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
	        $('#userList').DataTable();
	    } );
	</script>
</head>
<body>
	<div class="container">
		<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
			<a href='menu.php'> <button type='button' class='btn btn-primary'>Menu</button></a>
			<a href="../include/closeSession.php"><button type='button' class='btn btn-secondary'>Salir</button></a>
			<!--Pestañas-->
			<ul class="nav nav-tabs justify-content-end">
				<li class="nav-item">
					<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>				   	
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
					<!--cabeza-->
					<div class="card">
						<div class="card-header">
							<h4>Lista Socios</h4>
							<?php
								include_once '../include/db.php';
								//Corregir la consulta etc del buscador
								//$termino="";
								//$termino2=0;
								$sql = "SELECT T.*, C.Nombre FROM tabla T INNER JOIN calles C ON C.Id = T.Calle";
								$consulta = $conexion->prepare($sql);
								$consulta->execute();
								$resultado = $consulta->fetchAll();

								$total=0;
								$totalSocio=0;
								$totalPago=0;
								$totalNoPago=0;
								foreach ($resultado as $valor) {
									//si pago primer bimestre
									$total= $total+($valor["Pago"]+$valor["Pago2"]);
									$totalSocio++;
									if(($valor["Pago"]>0) || ($valor["Pago2"]>0)){
										$totalPago++;
									}else{
										$totalNoPago++;
									}
								}
								$biblioteca= ($total*87)/100;
								$ganancia=($total*13)/100;
								echo "<div><b>Total: </b>".$total.
								"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Biblioteca: </b>".$biblioteca.
								"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Ganancia: </b>".$ganancia.
								"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Socios: </b>".$totalSocio.
								"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pago: </b>".$totalPago.
								"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No Pago: </b>".$totalNoPago."</div>";
								/*echo "<div><b>Cantidad: </b>".$total.
								"&nbsp;&nbsp;&nbsp;<b>Faltan: </b>".$biblioteca.
								"&nbsp;&nbsp;&nbsp;<b>Cobros: </b>".$ganancia."</div>";*/
								
							?>
						</div>
						<!--Cuerpo-->
						<div class="card-body">
							<div class="table-responsive">
								<?php
									/*include_once '../include/db.php';
									//Corregir la consulta etc del buscador
									//$termino="";
									//$termino2=0;
									$sql = "SELECT T.*, C.Nombre FROM tabla T INNER JOIN calles C ON C.Id = T.Calle";
									$consulta = $conexion->prepare($sql);
									$consulta->execute();
									$resultado = $consulta->fetchAll();

									/*$total=0;
									
									foreach ($resultado as $valor) {
										//si pago primer bimestre
										$total= $total+$valor["Pago"];
									}
									$biblioteca= ($total*87)/100;
									$ganancia=($total*13)/100;
									echo "Total: ".$total."&nbsp;&nbsp;&nbsp;&nbsp;";
									echo "Biblioteca: ".$biblioteca."&nbsp;&nbsp;&nbsp;&nbsp;";
									echo "Ganancia: ".$ganancia."<br>";*/
									
									echo "<table id='userList' class='table table-bordered table-hover table-striped'>";
										echo "<thead class='thead-light'>";
											echo "<tr>";
												echo "<th scope='col'>N°</th>";
												echo "<th scope='col'>Calle</th>";
												echo "<th scope='col'>Altura</th>";
												echo "<th scope='col'>Pago</th>";
												echo "<th scope='col'>Pago2</th>";
												echo "<th scope='col'>Horario</th>";
												echo "<th scope='col'>Zona</th>";
												echo "<th></th>";
											echo "</tr>";
										echo "</thead>";
										echo "<tbody>";
										foreach ($resultado as $registro) {
											echo "<tr>";
												echo "<td scope='row'>".$registro['N°']."</td>";
												echo "<td>".$registro['Nombre']."</td>";
												echo "<td>".$registro['Altura']."</td>";
												echo "<td>".$registro['Pago']."</td>";
												echo "<td>".$registro['Pago2']."</td>";
												echo "<td>".$registro['Horario']."</td>";
												echo "<td>".$registro['Zona']."</td>";
												echo "<td><a href='formularioEdicion.php?id=".$registro['Id']."'><i class='fas fa-edit'></i></a>
												 <a onclick='return eliminar()' href='../eliminar.php?id=".$registro['Id']."'><i class='fas fa-user-times'></i></a></td>";
											echo "</tr>";
										}
										echo "</tbody>";
									echo "</table>";
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
					<div class="card">
						<div class="card-header">
							<h4>Nuevo Socio</h4>
						</div>
						<div class="card-body">
							<form class="form" role="form" autocomplete="off" method="POST" action="../guardar.php" >
								<input type='hidden' name='id'>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">N°</label>
									<div class="col-lg-9">
										<input class="form-control" type="number" name="numeroSocio" autofocus >
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Calle</label>
									<div class="col-lg-9">
										<!--http://select2.github.io/select2/-->
										<select class="form-control" name="calle" autofocus><!--Ccombo-->
											<?php
												// Armo la consulta
												$consulta2 = $conexion->prepare("SELECT * FROM calles ORDER BY Nombre");
												$consulta2->execute();
												$resultado2 = $consulta2->fetchAll();
												//recorro
												foreach ($resultado2 as $registro2) {
													echo "<option value='".$registro2['Id']."'>".$registro2['Nombre']."</option>";            
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Altura</label>
									<div class="col-lg-9">
										<input class="form-control" type="number" name="altura" min="1" max="10000" autofocus >
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Paga</label>
									<div class="col-lg-9">
										<input type="radio" name="pago" value="0" checked>Aun No paga &nbsp;&nbsp;
										<input type="radio" name="pago" value=120 autofocus >120 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="pago" value=150 autofocus >150 &nbsp;&nbsp;<!--Checkbox-->
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Paga2</label>
									<div class="col-lg-9">
										<input type="radio" name="pago2" value="0" checked>Aun No paga &nbsp;&nbsp;
										<input type="radio" name="pago2" value=120 autofocus >120 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="pago2" value=150 autofocus >150 &nbsp;&nbsp;<!--Checkbox-->
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Horario</label>
									<div class="col-lg-9">
										<input type="radio" name="horario" value="Mañana" checked>Mañana &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="horario" value="Tarde" autofocus>Tarde &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="horario" value="Noche" autofocus>Noche &nbsp;&nbsp;<!--Checkbox-->
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Zona</label>
									<div class="col-lg-9">
										<input type="radio" name="zona" value="zona1" checked>zona1 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="zona" value="zona2" autofocus>zona2 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="zona" value="zona3" autofocus>zona3 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="zona" value="zona4" autofocus>zona4 &nbsp;&nbsp;<!--Checkbox-->
										<input type="radio" name="zona" value="zona5" autofocus>zona5 &nbsp;&nbsp;<!--Checkbox-->
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-12 text-center">
										<input class="btn btn-primary" type="submit" value="Guardar">
										<input type="reset" class="btn btn-secondary" value="Limpiar">
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
	</div>
</body>
</html>
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
    <title>Menu</title>
</head>
<body>
    <!--<h1>Bienvenido <?php echo $_SESSION["user"]; ?></h1>-->
    <ul>
        <li><a href="../include/closeSession.php">Cerrar Sesion</a></li>
    </ul>
    <div id="menuPrincipalLista">
			<ul>
				<li>
					<a href="home.php">SOCIOS</a>
				</li>
				<li>
					<a href="#seccion2">Zona 1</a>
				</li>
				<li>
					<a href="#seccion3">Zona 2</a>
				</li>
				<li>
					<a href="#seccion4">Zona 3</a>
				</li>
				<li>
					<a href="#contacto">Zona 4</a>
				</li>
			</ul>
		</div>
    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <blockquote class="blockquote text-center">
        <h1>Lista de Socios</h1>
    </blockquote> -->
 
</body>
</html>
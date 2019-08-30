<!--
/*
*                       Leonardo Emanuel Espinoza
*                           $index-php
*                   Ultima modificacion : 29/07/2019
*                           Version: 1.0
*/
-->
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="../style/menu.css" >
    <title>Menu</title>
</head>
<body>
    <!--<h1>Bienvenido <?php echo $_SESSION["user"]; ?></h1>-->
    <ul>
        <li><a href="../include/closeSession.php">Cerrar Sesion</a></li>
    </ul>
    <div id="circulo1">
        <p>Socios</p>
    </div>
    <div class="circulo2">
        <p>Zona 2</p>
    </div>
    <div class="circulo3">
        <p>Zona 3</p>
    </div>
    <div class="circulo4">
        <p>Zona 4</p>
    </div>
    <div class="circulo5">
        <p>Zona 5</p>
    </div>
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
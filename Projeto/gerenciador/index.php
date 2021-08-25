<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<title>Formulario</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Formulario</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>      
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Formulario
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="?page=cad-cadastros">Cadastrar</a>
						  <a class="dropdown-item" href="?page=listar-cadastros">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Usuário
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="?page=cad-usuario">Cadastrar</a>
						  <a class="dropdown-item" href="?page=listar-usuario">Listar</a>
						</div>
					</li>
					
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						include("config.php");
						switch(@$_REQUEST["page"]){
							//biblioteca
							case "cad-cadastros":
								include("cad-cadastros.php");
							break;
							case "listar-cadastros":
								include("listar-cadastros.php");
							break;
							case "editar-cadastros":
								include("editar-cadastros.php");
							break;
							case "salvar-cadastros":
								include("salvar-cadastros.php");
							break;
							//usuario
							case "cad-usuario":
								include("cad-usuario.php");
							break;
							case "listar-usuario":
								include("listar-usuario.php");
							break;
							case "editar-usuario":
								include("editar-usuario.php");
							break;
							case "salvar-usuario":
								include("salvar-usuario.php");
							break;
							default:
								include("main.php");
						}
					?>
				</div>
			</div>
		</div>

		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	 </body>
</html>









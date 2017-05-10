<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="icon" href="img/hecate.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/body-style.css">
	<link rel="stylesheet" type="text/css" href="css/session-style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="js/codigos.js" ></script>
	<title>Registro - 1er Paso</title>
</head>
<body>
	<?php require "includes/navbar.php"; ?>

	<div class="container-fluid register">
		<div class="row form-class">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						Registro
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="register_second.php">
							<div class="form-group">
								<div class="col-sm-9">
								<label class="sr-only" for="email"> Email </label>
									<input type="email" class="form-control" id="email" placeholder="Email" required="required" onchange="validar(this.value)">
								</div>
								<div class="col-sm-3 message-box">
									<span id="er_icon" class="icon_hidden"><img alt="Invalido" class="signal" src="img/no.png"> Invalido </span>
									<span id="ok_icon" class="icon_hidden"><img alt="Correcto" class="signal" src="img/ok.png"> Correcto </span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12"> 
									<label class="sr-only" for="name"> Nombre </label>
									<input type="text" class="form-control" required="required" id="name" placeholder="Nombre">
								</div>
							</div>							
							<div class="form-group">
								<div class="col-sm-12"> 
									<label class="sr-only" for="user"> Usuario </label>
									<input type="text" class="form-control" required="required" id="user" placeholder="Usuario" maxlength="20">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12"> 
									<label class="sr-only" for="pass"> Contraseña </label>
									<input type="password" class="form-control" required="required" id="pass" placeholder="Indique su contraseña">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12"> 
									<label class="sr-only" for="pass2"> Repita su contraseña </label>
									<input type="password" class="form-control" required="required" id="pass2" placeholder="Repita su contraseña">
								</div>
							</div>
							<div>
								<div class="g-recaptcha" data-sitekey="6LcofhsUAAAAAOJ-p5clDHz38mzOHn4Ixicg5aeh"></div>
							</div>
							<div class="form-group"> 
								<div class="col-sm-12 submitButton">
									<button type="submit" class="btn btn-warning">Registrarse</button>
								</div>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>			
	</div>

	<!--
	<a href="https://icons8.com/web-app/13114/Cancel">Cancel icon credits</a>
	<a href="https://icons8.com/web-app/13115/Ok">Ok icon credits</a>
-->
</body>
</html>
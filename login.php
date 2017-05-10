<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/hecate.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/body-style.css">
	<link rel="stylesheet" type="text/css" href="css/session-style.css">
	<title>Inicio de Sesion</title>
	<script type="text/javascript" src="js/codigos.js" ></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<?php require "includes/navbar.php"; ?>

	<div class="container-fluid login">
		<div class="row form-class">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						Inicio de Sesión
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="user.php">
							<div class="form-group">
								<div class="col-sm-9">
									<label class="sr-only" for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email" required="required" onchange="validar(this.value)">
								</div>
								<div class="col-sm-3 message-box">
									<span id="er_icon" class="icon_hidden"><img class="signal" src="img/no.png" alt="invalid"> Invalido </span>
									<span id="ok_icon" class="icon_hidden"><img class="signal" src="img/ok.png" alt="correcto"> Correcto </span>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12"> 
									<label class="sr-only" for="pass">Password</label>
									<input type="password" class="form-control" required="required" id="pass" placeholder="Password">
								</div>
							</div>
							<div class="form-group"> 
								<div class="col-sm-12">
									<div class="checkbox reminder">
										<label for="checkbox"  class="sr-only">Olvide mi contraseña</label>
										<input id="checkbox" type="checkbox">Olvide mi contraseña
									</div>
								</div>
							</div>
							<div>
								<div class="g-recaptcha" data-sitekey="6LcofhsUAAAAAOJ-p5clDHz38mzOHn4Ixicg5aeh"></div>
							</div>
							<div class="form-group"> 
								<div class="col-sm-12 submitButton">
									<button type="submit" class="btn btn-success">Iniciar Sesión</button>
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
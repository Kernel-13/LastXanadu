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
	<title>Registro - 2do Paso</title>
</head>
<body>
	<?php require "includes/navbar.php"; ?>

	<div class="container-fluid register-second">
		<div class="row form-class">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						Casi hemos acabado...
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="user.php">
							<div class="form-group">
								<div>
									<h4>Deseas registrarte como...	</h4>
								</div>
								<div class="col-sm-12 ">
									<fieldset class="kind-selection ">
										<legend class="sr-only"> Escoge que deseas ser</legend>
										<div>
											<input type="radio" name="kind" value="musician" id="musician"> Músico
											<label class="sr-only" for="musician"> Musico </label>
										</div>
										<div>
											<input type="radio" name="kind" value="illustrator" id="illustrator"> Ilustrador
											<label class="sr-only" for="illustrator"> Ilustrador </label>
										</div>
									</fieldset>
								</div>
							</div>
							<div class="form-group">
								<div>
									<h4> Escoge una foto para tu perfil	</h4>
								</div>
								<div class="col-sm-12"> 
									<label class="sr-only" for="avatar"> Escoge tu avatar </label>
									<input type="file" class="form-control" required="required" id="avatar">
								</div>
							</div>							
							<div class="form-group">
								<div>
									<h4> Cuentanos algo sobre ti ... </h4>
								</div>
								<div class="col-sm-12"> 
									<label class="sr-only" for="descBox"> Descripcion </label>
									<textarea class="form-control" id="descBox" name="description" required="required" placeholder="... en menos de 1400 caracteres" maxlength="1400"></textarea>
								</div>
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
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
	
	<link rel="stylesheet" type="text/css" href="css/profile-view.css">
	<link rel="stylesheet" type="text/css" href="css/body-style.css">
	<link rel="stylesheet" type="text/css" href="css/messages.css">
	<link rel="icon" href="img/hecate.ico" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>LastXanadu</title>
</head>
<body>
	<?php require "includes/navbar.php"; ?>

	<div class="container">

		<!-- Sending a Message -->
		<div class="row section">
			<div class="col-lg-12">
				<h3>Enviar Mensaje</h3>
			</div>
			<form class="form-horizontal">
				<div class="col-lg-12">
					<div class="form-group">
						<div class="col-md-12">
							<label class="sr-only" for="receptor"> Destinatario </label>
							<input class="form-control" type="text" id="receptor" name="Destinatario" required="required" placeholder="Destinatario" maxlength="20">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
							<label class="sr-only" for="mensajes"> Mensaje </label>
							<textarea class="form-control" name="description" required="required" id="mensajes" placeholder="Escribe aquí tu mensaje" maxlength="500"></textarea>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<input type="submit" name="submit" value="Enviar" class="btn btn-success">
				</div>
			</form>
		</div>

		<!-- Message Management -->
		<div class="row section">
			<div class="col-lg-12">
				<h3>Bandeja de Entrada</h3>
			</div>
			<div class="col-lg-12">

				<!-- Tabs -->
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a data-toggle="tab" href="#new">Nuevos</a></li>
					<li><a data-toggle="tab" href="#read">Leidos</a></li>
					<li><a data-toggle="tab" href="#sent">Enviados</a></li>
				</ul>

				<!-- Tab Content -->
				<div class="tab-content">

					<!-- New  Messages -->
					<div id="new" class="tab-pane fade in active user-posts">
						<div class="row section">
							<div class="col-md-10 message">
								<div class="media">
									<div class="media-left">
										<a href="user.php"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object"></a>
									</div>
									<div class="media-body media-right">
										<h4 class="media-heading">Triumvirate Downfall</h4>
										<p>Maecenas ipsum velit, consectetuer eu, lobortis ut, dictum at, dui. In rutrum. Sed ac dolor sit amet purus malesuada congue. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Suspendisse sagittis ultrices augue. Mauris metus. Nunc dapibus tortor vel mi dapibus sollicitudin. Etiam posuere lacus quis dolor. Praesent id justo in neque elementum ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In convallis. Fusce suscipit libero eget elit. Praesent vitae arcu tempor neque lacinia pretium. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus.</p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div>
									<a href="" class="btn btn-success"> Responder </a>
								</div>
								<div>
									<a href="" class="btn btn-warning"> Marcar como Leido </a>
								</div>
								<div>
									<a href="" class="btn btn-danger"> Borrar </a>
								</div>
							</div>
						</div>
						<div class="row section">
							<div class="col-md-10 message">
								<div class="media">
									<div class="media-left">
										<a href="user.php"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object"></a>
									</div>
									<div class="media-body media-right">
										<h4 class="media-heading">Triumvirate Downfall</h4>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Aliquam erat volutpat. Nunc auctor. Mauris pretium quam et urna. Fusce nibh. Duis risus. Curabitur sagittis hendrerit ante. Aliquam erat volutpat. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Duis condimentum augue id magna semper rutrum. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Fusce consectetuer risus a nunc. Aliquam ornare wisi eu metus. Integer pellentesque quam vel velit. Duis pulvinar.</p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div>
									<a href="" class="btn btn-success"> Responder </a>
								</div>
								<div>
									<a href="" class="btn btn-warning"> Marcar como Leido </a>
								</div>
								<div>
									<a href="" class="btn btn-danger"> Borrar </a>
								</div>
							</div>
						</div>
					</div>

					<!-- Read Messages -->
					<div id="read" class="tab-pane fade user-posts">
						<div class="row section">
							<div class="col-md-10 message">
								<div class="media">
									<div class="media-left">
										<a href="user.php"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object"></a>
									</div>
									<div class="media-body media-right">
										<h4 class="media-heading">Triumvirate Downfall</h4>
										<p>In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam id dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris dictum facilisis augue. Fusce tellus. Pellentesque arcu. Maecenas fermentum, sem in pharetra pellentesque, velit turpis volutpat ante, in pharetra metus odio a lectus. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu, urna. Nullam at arcu a est sollicitudin euismod. Praesent dapibus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim ipsum id lacus. Nam sed tellus id magna elementum tincidunt.</p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div>
									<a href="" class="btn btn-danger"> Borrar </a>
								</div>
							</div>
						</div>
					</div>

					<!-- Sent Messages -->
					<div id="sent" class="tab-pane fade user-posts">
						<div class="row section">
							<div class="col-md-2">
								<div>
									<h4 class="media-heading"> 
										<img src="img/alins.jpg" alt="Emisor" class="img-rounded"> <span class="glyphicon glyphicon-arrow-right"></span> 
										<img src="img/solid2.png" alt="Receptor" class="img-rounded">
									</h4>
									<div>
										<h4>To Triumvirate Downfall</h4>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="media">
									<div class="media-body media-right">
										<p>Nam quis nulla. Integer malesuada. In in enim a arcu imperdiet malesuada. Sed vel lectus. Donec odio urna, tempus molestie, porttitor ut, iaculis quis, sem. Phasellus rhoncus. Aenean id metus id velit ullamcorper pulvinar. Vestibulum fermentum tortor id mi. Pellentesque ipsum. Nulla non arcu lacinia neque faucibus fringilla. Nulla non lectus sed nisl molestie malesuada. Proin in tellus sit amet nibh dignissim sagittis. Vivamus luctus egestas leo. Maecenas sollicitudin. Nullam rhoncus aliquam metus. Etiam egestas wisi a erat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row section">
							<div class="col-md-2">
								<div>
									<h4 class="media-heading"> 
										<img src="img/alins.jpg" alt="Emisor" class="img-rounded"> <span class="glyphicon glyphicon-arrow-right"></span> 
										<img src="img/solid4.png" alt="Receptor" class="img-rounded">
									</h4>
									<div>
										<h4>To Bad Dream</h4>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="media">
									<div class="media-body media-right">
										<p>Etiam posuere quam ac quam. Maecenas aliquet accumsan leo. Nullam dapibus fermentum ipsum. Etiam quis quam. Integer lacinia. Nulla est. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Integer vulputate sem a nibh rutrum consequat. Maecenas lorem. Pellentesque pretium lectus id turpis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
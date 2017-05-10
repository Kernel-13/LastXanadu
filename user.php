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
	<link rel="icon" href="img/hecate.ico" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>LastXanadu</title>
</head>
<body>
	<?php require "includes/navbar.php"; ?>

	<div class="container">
		<!-- User Pic / Description -->
		<div class="row section">
			<div class="col-md-3 col-sm-4 col-xs-2 media-left">
				<div class="aling-img">
					<img alt="Imagen de Usuario" id="user-pic" class="img-responsive img-rounded" src="img/alins.jpg">
				</div>
			</div>
			<div class="col-md-9 col-sm-8 col-xs-10">
				<div class="media-body">
					<h2 class="media-heading"> KilloveFP </h2>
					<p>	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. </p>
				</div>
			</div>
		</div>

		<!-- User's Last Posts -->
		<div class="row section">
			<div class="col-lg-12">

				<!-- Tabs -->
				<ul class="nav nav-tabs nav-justified">
					<li class="active" ><a data-toggle="tab" href="#music">Canciones</a></li>
					<li><a data-toggle="tab" href="#illust">Ilustraciones</a></li>
					<li><a data-toggle="tab" href="#friends">Friends</a></li>
				</ul>

				<!-- Tab Content -->
				<div class="tab-content">

					<!-- Music Content -->
					<div id="music" class="tab-pane fade in active user-posts">
						<div class="row">
							<div class="col-lg-12 flex">
								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive" src="img/a1.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 1 </a>
									</div>
								</div>
								
								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive" src="img/a2.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 2 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive" src="img/a3.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 3 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive" src="img/a4.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 4 </a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 flex">
								
								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive"  src="img/a5.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 1 </a>
									</div>
								</div>
								
								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive"  src="img/a6.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 2 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive"  src="img/a7.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 3 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="song.html"><img class="img-responsive"  src="img/a8.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="song.html"> Ejemplo 4 </a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Illustrations Content -->
					<div id="illust" class="tab-pane fade user-posts">
						<div class="row">
							<div class="col-lg-12 flex">
								
								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a9.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 1 </a>
									</div>
								</div>
								
								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a10.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 2 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a11.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 3 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a12.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 4 </a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 flex">
								
								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a13.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 1 </a>
									</div>
								</div>
								
								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a14.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 2 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a15.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 3 </a>
									</div>
								</div>

								<div class="thumbnail">
									<a href="illust.html"><img class="img-responsive"  src="img/a16.jpg" alt="Imagen de Ejemplo"></a>
									<div class="caption">
										<a href="illust.html"> Ejemplo 4 </a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Friends -->
					<div id="friends" class="tab-pane fade user-posts">
						<div class="row">
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object user-avatar-comment"></a>
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Triumvirate Downfall</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid3.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Landing Eagle</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid4.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Bad Dream</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Random Vector</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Triumvirate Downfall</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid3.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Landing Eagle</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid4.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Bad Dream</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Random Vector</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid2.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Triumvirate Downfall</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid3.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Landing Eagle</h3>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left">
										<a href="user.html"><img alt="Imagen de Amigo" src="img/solid4.png" class="img-circle media-object user-avatar-comment"></a>										
									</div>
									<div class="media-body media-right">
										<h3 class="media-heading">Bad Dream</h3>
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
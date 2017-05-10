<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>
			<a class="navbar-brand" href="index.php">Last<span>Xanadu</span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="novedades.php">Novedades</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Música <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Nuestros Músicos</a></li>
						<li><a href="#">Biblioteca de Canciones</a></li>
						<li><a href="song.php">Canción Aleatoria</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ilustraciones <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Nuestros Ilustradores</a></li>
						<li><a href="#">Galeria de Imagenes</a></li>
						<li><a href="illust.php">Ilustración Aleatoria</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Popular <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="popular-musica.php">Musica Popular </a></li>
						<li><a href="popular-ilustraciones.php">Ilustraciones Populares</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ranking <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="rankingM.php">Música</a></li>
						<li><a href="rankingI.php">Ilustraciones</a></li>
					</ul>
				</li>
				<li><a href="site_map.php">Mapa del Sitio</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php 

				if (true) {
					echo '<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>';
				} else {
					echo '<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi Cuenta <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="user.php">Mi Perfil</a></li>
							<li><a href="#">Mis Aportaciones</a></li>
							<li><a href="#">Mis Mensajes</a></li>
							<li><a href="#">My Timeline</a></li>
							<li><a href="upload_illust.php">Subir Ilustración</a></li>
							<li><a href="upload_song.php">Subir Canción</a></li>
							<li><a href="index.php">Logout</a></li>
						</ul>
					</li>';
				}

				?>
			</ul>
		</div>
	</div>
</nav>
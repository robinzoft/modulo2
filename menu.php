<div class="navbar navbar-inverse">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="index.php" name="top">SIAR Indicadores</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<?php if ($_SESSION["s_idprivilegios"] == "00001") { ?>
						<li id="menuUsuarios"><a href="usuarios.php"><i class="icon-home icon-white"></i> Usuarios</a></li>
						<li class="divider-vertical"></li>
						<li id="menuInstitucion"><a href="institucion.php"><i class="icon-lock icon-white"></i> Instituciones</a></li>
						<li class="divider-vertical"></li>
					<?php } if ($_SESSION["s_idprivilegios"] == "00002") { ?>
						<li id="menuIndicador"><a href="indicador.php"><i class="icon-file icon-white"></i> Indicadores</a></li>
						<li class="divider-vertical"></li>
						<li id="menuUMedida"><a href="unidad_medida.php"><i class="icon-signal icon-white"></i> Unidades Medida</a></li>
						<li class="divider-vertical"></li>
						<li id="menuLectura"><a href="lectura.php"><i class="icon-envelope icon-white"></i> Administrar Lectura</a></li>
						<li class="divider-vertical"></li>
						<li id="menuLectura"><a href="llenar_lectura.php"><i class="icon-envelope icon-white"></i> Ingresar Lectura</a></li>
						<li class="divider-vertical"></li>
					<?php } if ($_SESSION["s_idprivilegios"] == "00003") { ?>
						<li id="menuLectura"><a href="llenar_lectura.php"><i class="icon-envelope icon-white"></i> Lectura</a></li>
						<li class="divider-vertical"></li>
					<?php } ?>
				</ul>
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i> <?php print $_SESSION["s_nameape"]; ?>	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="configuracion_usuario.php"><i class="icon-wrench"></i> Configuracion</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="icon-share"></i> Cerrar Sesion</a></li>
					</ul>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>
<!--/.navbar -->
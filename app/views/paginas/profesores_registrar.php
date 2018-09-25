<?php require_once(RUTA_APP."/views/inc/Header.php"); ?>
		<header>
			<div class="contenedor">
				<div class="logo">
				    <img src="<?php echo RUTA_URL; ?>/img/logo.png" width="380">
				</div>
			</div>
		</header>

		<div class="navegacion">
			<nav>
				<ul class="clearfix">
					<li><a href="<?php echo RUTA_URL; ?>paginas">Inicio</a></li>

					<li><a href="">Alumnos</a>
						<ul>
                    		<li><a href="alumnos.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a class="enlace-activo" href="">Profesores</a>
						<ul>
                    		<li><a href="<?php echo RUTA_URL; ?>paginas/agregar">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="<?php echo RUTA_URL; ?>paginas/buscar">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="">Modulos</a>
						<ul>
                    		<li><a href="modulos.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="">Opciones</a>
						<ul>
                    		<li><a href="opciones.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="">Familias</a>
						<ul>
                    		<li><a href="#">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="">Matricula</a></li>
				</ul>
			</nav>
		</div>


		<main class="contenido-principal">

			<div class="titulo-formulario">
				<h2>Registro de <span>Profesores</span></h2>
			</div>

			<form class="formulario" action="<?php echo RUTA_URL ?>/paginas/agregar" method="POST">
				<label class="titulo-label">Nombres del Profesor:</label>
				<input class="input" type="text" name="nombres" placeholder="Nombres" required autofocus>
				<br>

				<label class="titulo-label">Apellido Paterno:</label>
				<input class="input" type="text" name="apellido-paterno" placeholder="Apellido Paterno" required>
				<br>

				<label class="titulo-label">Apellido Materno:</label>
				<input class="input" type="text" name="apellido-materno" placeholder="Apellido Materno" required>
				<br>
				

				<label class="titulo-label">Sexo:</label>
				<select class="input" name="sexo">
					<option value="masculino" selected="">Masculino</option>
					<option value="femenino">Femenino</option>
				</select>
				<br>


				<label class="titulo-label">Edad:</label>
				<input class="input" type="text" name="edad" required>
	<!--			<input class="input" type="date" name="fecha-nacimiento" placeholder="DD/MM/AAAA" required>        -->
				<br>

				<div class="botones">
					<input class="boton-registrar" type="submit" value="Registrar">
					<input class="boton-limpiar" type="reset" value="Limpiar">
				</div>
			</form>	
		</main>

		<aside>
			
		</aside>

		<footer>
			
		</footer>

	</body>
</html>
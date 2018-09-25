<?php require_once(RUTA_APP."/views/inc/Header.php"); ?>
		<header>
			<div class="contenedor">
				<div class="logo">
				    <img src="<?php echo RUTA_URL; ?>img/logo.png" width="380">
				</div>
			</div>
		</header>

		<div class="navegacion">
			<nav>
				<ul class="clearfix">
					<li><a href="<?php echo RUTA_URL; ?>">Inicio</a></li>

					<li><a href="">Alumnos</a>
						<ul>
                    		<li><a href="alumnos.php">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="#">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a href="">Profesores</a>
						<ul>
                    		<li><a href="<?php echo RUTA_URL; ?>paginas/agregar">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="<?php echo RUTA_URL; ?>paginas/buscar">Modificar</a></li>
                    		<li><a href="#">Reportes</a></li>
                  		</ul>
					</li>

					<li><a class="enlace-activo" href="">Modulos</a>
						<ul>
                    		<li><a href="<?php echo RUTA_URL; ?>C_Modulo/agregar">Registrar</a></li>
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

					<li><a href="#">Matricula</a></li>
				</ul>
			</nav>
		</div>


		<main class="contenido-principal">

			<div class="titulo-formulario">
				<h2>Operaciones para <span>Módulos</span></h2>
			</div>

			<form class="formulario" action="<?php echo RUTA_URL;?>C_Modulo/agregar" method="POST">
				<label class="titulo-label">Nombre del módulo:</label>
				<input class="input" type="text" name="nombre" placeholder="Nombre del Módulo" required autofocus>
				<br>
				
				<label class="titulo-label">Duracion en horas:</label>
				<input class="input" type="number" name="duracion" placeholder="Ej. 300" required>
				<br>

				<div class="botones">
					<input class="boton-registrar" type="submit" value="Registrar">
					<input class="boton-modificar" type="submit" value="Modificar">
					<input class="boton-eliminar" type="submit" value="Eliminar">
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
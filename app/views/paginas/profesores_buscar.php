<?php require_once(RUTA_APP."/views/inc/Header.php"); ?>

		<header>
			<div class="contenedor">
				<div class="logo">
				    <img src="<?php echo RUTA_URL;?>/img/logo.png" width="380">
				</div>
			</div>
		</header>

		<div class="navegacion">
			<nav>
				<ul class="clearfix">
					<li><a href="<?php echo RUTA_URL;?>paginas">Inicio</a></li>

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
                    		<li><a href="<?php echo RUTA_URL;?>paginas/agregar">Registrar</a></li>
                    		<li><a href="#">Eliminar</a></li>
                    		<li><a href="<?php echo RUTA_URL;?>paginas/buscar">Modificar</a></li>
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
				<h2>Buscar nombre del <span>Profesor </span> a modificar</h2>
			</div>

			<form class="formulario" action="" method="POST">
				<label class="titulo-label">Nombres del Profesor:</label>
				<select class="input" name="id" required autofocus>
					<?php     
                        foreach($datos['profesores'] as $prof):
                    
                            echo '<option value="'.$prof->idprof.'">'.$prof->apePaterno.' '.$prof->apeMaterno.', '.$prof->nombre.'</option>';                       
                    
                        endforeach;
					?>
				</select>
				
				<br>

				<div class="botones">
					<input class="boton-buscar" type="submit" value="Buscare" name="button" id="button" onClick="prueba">
				</div>
			</form>
			<?php
                    if(isset($_POST["button"])){
                        $id = $_POST['id'];
                        redireccionar('paginas/editar/'.$id);
                    }
            ?>
		</main>

		<aside>
			
		</aside>

		<footer>
			
		</footer>

	</body>
</html>
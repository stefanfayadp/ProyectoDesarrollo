<!doctype html>
<?php include 'inc/nav.php'?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Registro de Peliculas</title>
  <meta name="author" content="Peliculas">
  <link rel="shortcut icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="stylesheet" type="text/css" media="all" href="css/formulario.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/frmresponsive.css">    
  <link rel="stylesheet" type="text/css" media="all" href="css/nav.css">
</head>

<body>

	<section id="container">
		<h2>Añadir Pelicula</h2>
		<form name="hongkiat" id="hongkiat-form" method="POST" action="registrarPelicula.php">
		<div id="wrapping" class="clearfix">
			
			<section id="aligned">
            
                
			<input type="number" name="id" id="id" placeholder="Inserte ID:" tabindex="1" class="txtinput">
			<input type="text" name="titulo" id="titulo" placeholder="Titulo:" autocomplete="off" tabindex="2" class="txtinput">        
            <input type="date" name="fechaestreno" id="fechaestreno" placeholder="Fecha Estreno:" autocomplete="off" tabindex="4" class="txtinput"> 
            <input type="text" name="director" id="director" placeholder="Director:" autocomplete="off" tabindex="5" class="txtinput">
            <textarea name="sinopsis" id="sinopsis" placeholder="Introduce una sinopsis..." tabindex="7	" class="txtblock"></textarea>
                
			</section>
			
			<section id="aside" class="clearfix aligned">
				<input type="text" name="clasificacion" id="clasificacion" placeholder="Infantil, +18, ..." autocomplete="off" tabindex="8" class="txtinputaside">
				<input type="text" name="idioma" id="idioma" placeholder="Idioma" autocomplete="off" tabindex="9" class="txtinputaside">
				<input type="text" name="genero" id="genero" placeholder="Accion, Drama ..." autocomplete="off" tabindex="9" class="txtinputaside">
				<input type="text" name="duracion" id="duracion" placeholder="1:45:15" autocomplete="off" tabindex="10" class="txtinputaside">
			</section>
		</div>                    

		
		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Limpiar">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Guardar">
            <br style="clear:both;">
		</section>
		</form>
	</section>
    			
   	

	            <!-- Comentario
	            <section id="recipientcase">
				<h3>Genero:</h3>
					<select id="clasificacion" name="clasificacion" tabindex="7" class="selmenu">
  						<option value="Accion">Accion</option>
  						<option value="Drama">Drama</option>
  						<option value="Comedia">Comedia</option>
                        <option value="Fantasia">Fantasia</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Terror">Terror</option>
					</select>
				</section>
                
                <section id="recipientcase">
				<h3>Idioma:</h3>
					<select id="idioma" name="idioma" tabindex="8" class="selmenu">
  						<option value="Español">Español</option>
  						<option value="Ingles-Subtitulada">Ingles-Subtitulada</option>
  						<option value="Multilenguaje">Multilenguaje</option>
					</select>
				</section>
				
				<section id="prioritycase">
					<h3>Clasificacion:</h3>
					<span class="radiobadge">
						<input type="radio" id="clasificacion" name="clasificacion" value="Adultos">
						<label for="Adultos">Adultos</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="clasificacion" name="clasificacion" value="Infantil" checked="checked">
						<label for="Infantil">Infantil</label>
					</span>
				
					<span class="radiobadge">
						<input type="radio" id="clasificacion" name="clasificacion" value="Todo Publico">
						<label for="TodoPublico ">Todo Publico</label>
					</span>
				</section>
                
                <section id="recipientcase">
				<h3>Duracion:</h3>
					<input type="range" id="duracion" name="duracion" placeholder="Duracion" autocomplete="off" tabindex="9" class="selmenu">
				</section>
				  
		      
			<input type="url" name="website" id="website" placeholder="Website URL" autocomplete="off" tabindex="3" class="txtinput">
		
			<input type="tel" name="telephone" id="telephone" placeholder="Phone number?(optional)" tabindex="4" class="txtinput">
            
            <input type="text" name="genero" id="genero" placeholder="Genero:" autocomplete="off" tabindex="3" class="txtinput"> 
		
			<textarea name="message" id="message" placeholder="Enter a cool message..." tabindex="5" class="txtblock"></textarea>
            -->

</body>
</html>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="jquery-1.3.2.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Registro de Usuarios</title>
  <meta name="author" content="Usuarios">
  <link rel="shortcut icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="stylesheet" type="text/css" media="all" href="css/formulario.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/frmresponsive.css">    
  <link rel="stylesheet" type="text/css" media="all" href="css/nav.css">
  <script type="text/javascript" src="js/verificar.js"></script>
</head>

<body>

	<section id="container">
		<h2>Registro</h2>
		<form name="hongkiat" id="hongkiat-form" method="POST" action="registrarUsuario.php">
		<div id="wrapping" class="clearfix">
			
			<section id="aligned">
            
                
			<input type="number" name="identificacion" id="identificacion" placeholder="Inserte identificacion:" tabindex="1" class="txtinput">
			<input type="text" name="nombre" id="nombre" placeholder="Nombres:" autocomplete="off" tabindex="2" class="txtinput">        
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos:" autocomplete="off" tabindex="3" class="txtinput"> 
            
			</section>
			
			<section id="aside" class="clearfix aligned">
				<input type="email" name="email" id="email" placeholder="Email:" autocomplete="off" tabindex="4" class="txtinputaside">
				<input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario:" autocomplete="off" tabindex="5" onchange="validar()" class="txtinputaside"><h3 class="clearfix aligned" id="Info"></h3>
				<input type="password" name="password" id="password" placeholder="Contraseña:" autocomplete="off" tabindex="6" class="txtinputaside">           
			</section>
		</div>                    

		
		<section id="buttons">
			<input type="reset" name="reset" id="resetbtn" class="resetbtn" value="Limpiar">
			<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Guardar">
            <br style="clear:both;">
		</section>
		</form>
	</section>

</body>
</html>

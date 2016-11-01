

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="author" content="Login">
  <link rel="shortcut icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
    <link rel="stylesheet" href="css/login.css">

  </head>

  <body>

    <hgroup>
      <h1>Iniciar Sesion</h1>
      <h3>Sistema de Reserva de Tickets</h3>
    </hgroup>
<form>
  <div class="group">
    <input type="text" name="usuario" id="usuario"><span class="highlight"></span><span class="bar"></span>
    <label>Usuario</label>
  </div>

  <div class="group">
    <input type="password" name="password" id="password"><span class="highlight"></span><span class="bar"></span>
    <label>Contraseña</label>
  </div>

  <button type="button" class="button buttonBlue">Iniciar Sesion
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>

  <div>
    <h3><a href="frmRegistrarUsuario.php">Registrarse</a></h3>
  </div>

</form>

    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script> -->
    
  </body>
</html>


     <?php
     $var=htmlspecialchars($_GET["usr"]);
     if($var=='no'){
    echo"<p align='center'>password incorrecto</p>";
    }else{
       if($var=='yes'){
      echo"<p align='center'>La cuenta no esta activada</p>";
      }else{
        if($var=='r'){
         echo"<p>Le enviamos un correo con la activacion de la cuenta</p>";
      }else{
        if($var=='f'){
      echo"<p align='center'>usuario no registrado</p>";
      }
        
        }
        
      }
    }
     
     ?>
  </div>
</div>
    <script src="js/formulario.js"></script>
</body>
</html>
<!doctype html>
<?php include 'inc/nav.php'?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Listado de Usuarios</title>
  <meta name="author" content="Usuarios">
  <link rel="shortcut icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="stylesheet" type="text/css" media="all" href="css/formulario.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/frmresponsive.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/nav.css">
</head>    
    
<body>
    <section id="container">
        <h2>Listado de Usuarios</h2>
        <table border="1">

        <tr>
            <td>Identificacion</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Email</td>
            <td>Usuario</td>
            <td>Contraseña</td>
            <td>Gravatar</td>
            <td>Validacion</td>
            <td>Activacion</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </section>
        
        

<?php

try {

    
    include 'inc/conexion.php';	
    $sql = "SELECT * from cliente ";//WHERE idpelicula = '".$_GET['pelicula']."' ";

    $res = $mbd->query($sql);

    foreach($res as $fila) {
        echo "<TR>";
        echo "<td>".$fila['identificacion']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['apellidos']."</td>";
        echo "<td>".$fila['email']."</td>";
        echo "<td>".$fila['usuario']."</td>";
        echo "<td>".$fila['password']."</td>";
        echo "<td>".$fila['duracion']."</td>";
        echo "<td>".$fila['validacion']."</td>";
        echo "<td>".$fila['sinopsis']."</td>";
        echo "<td><a href=\" #\">Ver Pelicula</a></td>";
        echo "<td><a href=\" #\">Eliminar Pelicula</a></td>";
        echo '</tr>';
    }
    $mbd = null;
} catch (Exception $e) {
    echo $e->getMessage();
}



?>
        
        <section id="buttons">
			<a href="frmRegistrarUsuario.php" class="submitbtn"><input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Nuevo"></a>
			<br style="clear:both;">
		</section>
</body>    
</html>

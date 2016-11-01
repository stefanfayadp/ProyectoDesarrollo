<!doctype html>
<?php include 'inc/nav.php'?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Listado de Peliculas</title>
  <meta name="author" content="Peliculas">
  <link rel="shortcut icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/Lion_Style_Sidebar_icons/16/Movies.png">
  <link rel="stylesheet" type="text/css" media="all" href="css/formulario.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/frmresponsive.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/nav.css">
</head>    
    
<body>
    <section id="container">
        <h2>Listado de peliculas</h2>
        <table border="1">

        <tr>
            <td>Idpelicula</td>
            <td>Titulo</td>
            <td>Genero</td>
            <td>Fecha Estreno</td>
            <td>Clasificacion</td>
            <td>Director</td>
            <td>Duracion</td>
            <td>Idioma</td>
            <td>Sinopsis</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </section>
        
        

<?php

try {

    
    include 'inc/conexion.php';	
    $sql = "SELECT * from pelicula ";//WHERE idpelicula = '".$_GET['pelicula']."' ";

    $res = $mbd->query($sql);

    foreach($res as $fila) {
        echo "<TR>";
        echo "<td>".$fila['id']."</td>";
        echo "<td>".$fila['titulo']."</td>";
        echo "<td>".$fila['genero']."</td>";
        echo "<td>".$fila['fechaestreno']."</td>";
        echo "<td>".$fila['clasificacion']."</td>";
        echo "<td>".$fila['director']."</td>";
        echo "<td>".$fila['duracion']."</td>";
        echo "<td>".$fila['idioma']."</td>";
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
			<a href="frmRegistrarPelicula.php" class="submitbtn"><input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Nuevo"></a>
			<br style="clear:both;">
		</section>
</body>    
</html>

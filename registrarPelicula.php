<?php
     $id = $_POST['id'];
     $titulo = $_POST['titulo'];
     $genero = $_POST['genero'];
     $fechaestreno = $_POST['fechaestreno'];
     $clasificacion= $_POST['clasificacion'];
     $director = $_POST['director'];
     $duracion = $_POST['duracion'];
     $idioma = $_POST['idioma'];
     $sinopsis = $_POST['sinopsis'];

     echo $id;
         echo $titulo;
         echo $genero;
         echo $fechaestreno;
         echo $clasificacion;
         echo $director;
         echo $duracion;
         echo $idioma;
         echo $sinopsis;

    $reqlen =strlen($id)*strlen($titulo)*strlen($genero)*strlen($fechaestreno)*strlen($clasificacion)*strlen($director)*strlen($duracion) *strlen($idioma)*strlen($sinopsis);
    
    // if($reqlen >0){
		 
         try{
         include 'inc/conexion.php';
         $mbd->query("INSERT INTO pelicula(id,titulo,genero,fechaestreno,clasificacion,director,duracion,idioma,sinopsis) VALUES (".$id.",'".$titulo."','".$genero."','".$fechaestreno."','".$clasificacion."','".$director."','1:45','"$idioma"','".$sinopsis."');");
         /*$mbd->query("INSERT INTO pelicula(id,titulo,genero,fechaestreno,clasificacion,director,duracion,idioma,sinopsis) VALUES (12,'sfgdasdas','as','10/24/2011','Accion','Director','1:32:22','Espal','aaaaaaa');");*/
         $mbd=null;
         header('location:listarPelicula.php');
     }catch(Exception $e){
         echo $e->getMessage();
     }
     /*}else{
		 
        echo "Rellene todos los campos";
     }*/           
?>



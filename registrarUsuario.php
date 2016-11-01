<?php
     $identificacion = $_POST['identificacion'];
     $nombre = $_POST['nombre'];
     $apellidos = $_POST['apellidos'];
     $email = $_POST['email'];
     $usuario= $_POST['usuario'];
     $password = $_POST['password'];
     $validacion = false;

		 
         try{
	error_reporting(-1);
	ini_set("display_errors", "On");
	//phpinfo();
	$pass = "123postgres";
	$conn = pg_pconnect("host=127.0.0.1 port=5432 dbname=desarrollo2016_cine user=desarrollo2016_postgres password=$pass");
	if (!$conn) {
	  echo "An error occurred.\n";
	  exit;
	}
         $mbd->query("INSERT INTO cliente(identificacion,nombre,apellidos,email,usuario,password,validacion) VALUES (".$identificacion.",'".$nombre."','".$apellidos."','".$email."','".$usuario."','".$password."','false');");

         $mbd=null;
         header('location:listarUsuario.php');
     }catch(Exception $e){
         echo $e->getMessage();
     }
*/         
?>



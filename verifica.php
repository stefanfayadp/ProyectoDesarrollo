<?php
sleep(1);
$conecxion= pg_connect("host=localhost dbname=cine user=postgres password=postgres")
    or die('No se ha podido conectar: ' . pg_last_error());
if($_REQUEST)
{
	$usuario 	= $_REQUEST['usuario'];
	$query = "select * from cliente where usuario = '".strtolower($usuario)."'";
	$results = pg_query($conecxion, $query) or die('fail');

	
	if(pg_num_rows(@$results) > 0) // not available
	{
		echo '<div class="info" id="Error">Usuario ya existente</div>';
		
	}
	else
	{
		echo '<div class="info" id="Success">Disponible</div>';
	}
	
}?>

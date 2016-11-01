<?php
// Conectando y seleccionado la base de datos  
   $pass2 = "123postgres";
   $conecxion= pg_connect("host=localhost dbname=desarrollo2016_cine user=desarrollo_postgres password=$pass2")
    or die('No se ha podido conectar: ' . pg_last_error());
 <?
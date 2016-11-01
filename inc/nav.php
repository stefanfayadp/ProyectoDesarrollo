<head>
<link rel="stylesheet" href="css/nav.css">
</head>

<ul class="topnav" id="myTopnav">
  <li><a class="active" href="index.php">Inicio</a></li>
  <li><a href="listarPelicula.php">Peliculas</a></li>
  <li><a href="listarUsuario.php">Usuarios</a></li>
  <li><a href="#about">Reservas</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>


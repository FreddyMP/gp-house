<?php
include("publicaciones.php");
include("../../backend/cone.php");

$id = $_GET["id"];

$lista_publicaciones= $conexion->query("SELECT * FROM publicaciones ORDER BY id_publicacion DESC LIMIT 1");
$datos = $lista_publicaciones->fetch_assoc();

?>
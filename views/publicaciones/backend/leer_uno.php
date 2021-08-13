<?php
include("publicaciones.php");
include("../../backend/cone.php");

$listado = new Publicaciones();
$id = $_GET["id"];
$listado->one_publicaciones($id);
$lista_publicaciones= $conexion->query($listado->consulta_query);
$datos = $lista_publicaciones->fetch_assoc();

?>
<?php
include("publicaciones.php");
include("../../backend/cone.php");
$id = $_SESSION["id_usuario"];
$listado = new Publicaciones();

$listado->all_publicaciones($id);
$lista_publicaciones= $conexion->query($listado->consulta_query);

?>
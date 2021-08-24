<?php
include("publicaciones.php");
include("../../backend/cone.php");

$id = $_GET["id"];

$conexion->query("UPDATE publicaciones set cuotas = 1 where id_publicacion= $id");


?>
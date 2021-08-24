<?php

include("../../../backend/cone.php");

$id = $_GET['id'];

$conexion->query("DELETE FROM publicaciones where id_publicacion = $id");

header('location:../lista_publicaciones.php?action_del=1');

?>
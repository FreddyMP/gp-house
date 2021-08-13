<?php
    include("agentes.php");

    $tipo= $_POST["tipo"];
    $nombre= $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono= $_POST["telefono"];
    $contrasena = $_POST["contrasena"];

    $nuevo = new Agente();
    $nuevo->add_agente($tipo, $nombre, $correo, $telefono, $contrasena);

    header("location:../../login/login.php");
?>
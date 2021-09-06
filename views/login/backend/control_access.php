<?php
    include("../../../backend/cone.php");
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $query="SELECT * from usuarios_agentes where correo = '$correo' and password_usuario = '$password' LIMIT 1";
    $consulta = $conexion->query($query);
        $existencia = $consulta->num_rows;
        if($existencia > 0){
            session_start();
            $usuario= $consulta->fetch_assoc();
            $nombre= $usuario["nombre"];
            $correo= $usuario["correo"];
            $tipo = $usuario["tipo"];
            $id_agente = $usuario["id_agente"];
            $_SESSION["nombre"] = $nombre;
            $_SESSION["correo"] = $correo;
            $_SESSION["tipo"] = $tipo;
            $_SESSION["id_usuario"] = $id_agente;
            header("location:../../publicaciones/lista_publicaciones.php");
        }else{
            header("location:../../login/login.php?log=true");
        }
    echo $existencia;
?>
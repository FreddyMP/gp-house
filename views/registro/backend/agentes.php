<?php
    class Agente {

        function Agente(){

        }
        function add_agente($tipo, $nombre, $correo,$telefono, $contraseña){
            include("../../../backend/cone.php");
            $query= "INSERT INTO usuarios_agentes (tipo, nombre, correo, telefono, password_usuario) values ('$tipo','$nombre','$correo','$telefono', '$contraseña')";
            $conexion->query($query);
        }
    }

?>
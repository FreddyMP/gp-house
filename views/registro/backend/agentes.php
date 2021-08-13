<?php
    class Agente {

        function Agente(){

        }
        function add_agente($tipo, $nombre, $correo,$telefono, $contraseña){
            include("../../../backend/cone.php");
            $query= "INSERT INTO usuarios_agentes (tipo, nombre, correo, telefono, password_usuario, membresia) values ('$tipo','$nombre','$correo','$telefono', '$contraseña','true')";
            $conexion->query($query);
        }
    }

?>
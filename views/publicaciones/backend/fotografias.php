<?php
    class Fotos{
        var $ruta;
        function Fotos(){
            $this->ruta= "../../../backend/cone.php";
        }
        function insert_picture($foto, $agente, $publicacion){
                include($this->ruta);
                $directorio = '../../../asset/img_publicaciones/';
                $subir= $directorio.basename($_FILES['foto']['name']);
                move_uploaded_file($_FILES['foto']['tmp_name'], $subir);
                $foto = $_FILES['foto']['name'];
                echo $foto;
    
                $consulta_query ="INSERT INTO fotos (nombre, id_agente,id_publicacion) values
                ('$foto','$agente','$publicacion')";
                $conexion->query($consulta_query);
        }

    }
?>
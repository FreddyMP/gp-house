<?php
    class Fotos{
        var $ruta;
        function Fotos(){
            $this->ruta= "../../../backend/cone.php";
        }
        function insert_picture($foto, $temporal){
                $directorio = '../../../asset/img_publicaciones/';
                $subir= $directorio.basename($foto);
                move_uploaded_file($temporal, $subir);
                $foto2 = $foto;
                echo $foto2;
    
        }

    }
?>
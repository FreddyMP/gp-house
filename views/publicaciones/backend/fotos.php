<?php

    function list_fotos($id_publicacion){
        $fotos_consulta = "SELECT nombre, id_publicacion FROM fotos where id_publicacion = $id_publicacion";
        return $fotos_consulta;
    }
    
?>
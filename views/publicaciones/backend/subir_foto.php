<?php 
    include("../../../backend/cone.php");
    session_start();
    $id_agente = $_SESSION["id_usuario"];
    $id_publicacion = $_POST["id_publicacion"];
        
    $foto= $_FILES["foto"]["name"];
    $temporal = $_FILES['foto']['tmp_name'];
    echo $temporal;

    $directorio = '../../../asset/';
    if($subir= $directorio.basename($_FILES['foto']['name'])){
        echo "la base si funciona";
    }else{
        echo "la base no funciona";
    }
    if(move_uploaded_file($temporal, $subir)){
        $foto = $_FILES['foto']['name'];
        echo $foto;
    }else{
        echo "no subio";
    }

    $consulta_query ="INSERT INTO fotos (nombre, id_agente,id_publicacion) values('$foto',$id_agente,$id_publicacion)";
    $conexion->query($consulta_query);
?>
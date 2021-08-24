<?php
class Publicaciones {
    var $ruta;
    function Publicaciones(){
        $this->ruta = "../../../backend/cone.php";
    }
  
    function all_publicaciones(){
        $this->consulta_query = "SELECT * FROM publicaciones";
        return $this->consulta_query;
    }
    function last_publicacion(){
        $this->consulta_query = "SELECT * FROM publicaciones ORDER BY id_publicacion DESC LIMIT 1";
        return $this->consulta_query;
    }

    function municipios_for_provincia($provincia){
        $this->consulta_query = "SELECT * FROM municipios where provincia = '$provincia'";
        return $this->consulta_query; 
    }

    function all_municipios(){
        $this->consulta_query = "SELECT * FROM municipios";
        return $this->consulta_query; 
    }

    function sectores_for_municipio($id_municipio){
        $this->consulta_query = "SELECT * FROM sectores where id_municipio = $id_municipio";
        return $this->consulta_query; 
    }

    function one_publicaciones($id){
        $consulta_query = "SELECT * FROM publicaciones where id_publicacion = $id";
        return $consulta_query;
    }

    function delete_publicacion($id){
       
    }
    function insert_publicacion($titulo, $tipo_inmueble,$tipo_contrato,$descripcion, $provincia, $id_municipio, $longitud, $latitud, $id_agente, $sector, $residencial , $condominio,$cerrado,$mt2_construccion,$mt2_terreno,$niveles,$habitaciones, $baños, $piscina, $jardin, $parqueo, $terraza, $balcon, $gimnasio, $jacuzzi, $area_ninos, $cuotas, $precio,$area_lavado, $tipo_deposito){
        include($this->ruta);
        $consulta_query ="INSERT INTO publicaciones (titulo, tipo_inmueble,tipo_contrato, descripcion, provincia,municipio, longitud, latitud, id_agente, sector, residencial,condominio, cerrado, mt2_construccion, mt2_terreno,niveles,habitaciones,banos, piscina, jardin, parqueos, terraza, balcon, gimnasio, jacuzzi, area_de_ninos, cuotas, precio_completo, area_lavado, tipo_deposito) values
         ('$titulo','$tipo_inmueble','$tipo_contrato','$descripcion','$provincia','$id_municipio','$longitud', '$latitud', $id_agente, '$sector', $residencial,$condominio, $cerrado, $mt2_construccion, $mt2_terreno,$niveles,$habitaciones,$baños,  $piscina, $jardin, $parqueo, $terraza, $balcon, $gimnasio, $jacuzzi, $area_ninos,$cuotas, $precio,$area_lavado, '$tipo_deposito')";
        $conexion->query($consulta_query);
    }

    function insert_picture($foto, $agente, $publicacion){
        include($this->ruta);
            $directorio = '../../../asset/img_publicaciones';
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
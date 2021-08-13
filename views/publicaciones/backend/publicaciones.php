<?php
class Publicaciones {
    var $ruta;
    function Publicaciones(){
        $this->ruta = "../../../backend/cone.php";
    }
  
    function all_publicaciones($id){   
        $this->consulta_query = "SELECT * FROM publicaciones  where id_agente = $id ORDER BY id_publicacion DESC";
        return $this->consulta_query;
    }
    function last_publicacion(){  
        include($this->ruta);
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
        $this->consulta_query = "SELECT * FROM publicaciones where id_publicacion = $id";
        return  $this->consulta_query;
    }

    function insert_publicacion($foto,$titulo, $vigilancia, $ascensor, $tipo_inmueble,$tipo_contrato,  $descripcion, $provincia, $id_municipio, $longitud, $latitud, $id_agente, $sector, $residencial , $condominio,$cerrado,$mt2_construccion,$mt2_terreno,$niveles,$habitaciones, $baños, $piscina, $jardin, $parqueo, $terraza, $balcon, $gimnasio, $jacuzzi, $area_ninos, $cuotas, $precio,$area_lavado, $tipo_deposito){
        include($this->ruta);
        $consulta_query ="INSERT INTO publicaciones (foto_principal, titulo, vigilancia, ascensor, tipo_inmueble,tipo_contrato, descripcion, provincia, municipio, longitud, latitud, id_agente, sector, residencial,condominio, cerrado, mt2_construccion, mt2_terreno,niveles,habitaciones,banos, piscina, jardin, parqueos, terraza, balcon, gimnasio, jacuzzi, area_de_ninos, cuotas, precio_completo, area_lavado, tipo_deposito) values
         ('$foto','$titulo',$vigilancia,$ascensor,'$tipo_inmueble','$tipo_contrato', '$descripcion', '$provincia',$id_municipio,'$longitud', '$latitud', $id_agente, '$sector', $residencial,$condominio, $cerrado, $mt2_construccion, $mt2_terreno,$niveles,$habitaciones,$baños,  $piscina, $jardin, $parqueo, $terraza, $balcon, $gimnasio, $jacuzzi, $area_ninos,$cuotas, $precio,$area_lavado, '$tipo_deposito')";
        $conexion->query($consulta_query);
    }
}
?>
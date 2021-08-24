<?php
include("publicaciones.php");
include("../../../backend/cone.php");

$id = $_POST["id"];

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$vigilancia = $_POST["vigilancia"];
$ascensor = $_POST["ascensor"];
$tipo_inmueble = $_POST["tipo_inmueble"];
$tipo_contrato = $_POST["tipo_contrato"];
$provincia = $_POST["provincia"];
#$municipio = $_POST["municipio"];
$ubicacion = $_POST["longitud"];
$sector = $_POST["sector"];
$residencial = $_POST["residencial"];
$condominio = $_POST["condominio"];
$cerrado = $_POST["cerrado"];
$mt2_terreno = $_POST["mt2_terreno"];
$mt2_construccion = $_POST["mt2_construccion"];
$niveles = $_POST["niveles"];
$habitaciones = $_POST["habitaciones"];
$banos = $_POST["banos"];
$piscina = $_POST["piscina"];
$jardin = $_POST["jardin"];
$parqueos = $_POST["parqueos"];
$terraza = $_POST["terraza"];
$balcon = $_POST["balcon"];
$gimnasio = $_POST["gimnasio"];
$jacuzzi = $_POST["jacuzzi"];
$area_de_ninos = $_POST["area_ninos"];
$cuotas = $_POST["cuotas"];
$precio= $_POST["precio"];
$area_lavado = $_POST["area_lavado"];
$tipo_deposito = $_POST["tipo_deposito"];


$conexion->query("UPDATE publicaciones set
titulo = '$titulo',
vigilancia = $vigilancia, 
ascensor = $ascensor, 
tipo_inmueble = '$tipo_inmueble',
tipo_contrato = '$tipo_contrato',
descripcion = '$descripcion',
provincia = '$provincia',
longitud = '$ubicacion',
sector = '$sector',
residencial = $residencial,
condominio = $condominio,
cerrado = $cerrado,
mt2_construccion = $mt2_construccion,
mt2_terreno = $mt2_terreno,
niveles = $niveles,
habitaciones = $habitaciones,
banos = $banos,
piscina = $piscina,
jardin = $jardin,
parqueos = $parqueos,
terraza = $terraza,
balcon = $balcon,
gimnasio = $gimnasio,
jacuzzi = $jacuzzi,
area_de_ninos = $area_de_ninos,
cuotas = $cuotas,
area_lavado = $area_lavado,
precio_completo = $precio,
tipo_deposito = '$tipo_deposito'
 where id_publicacion= $id");


?>
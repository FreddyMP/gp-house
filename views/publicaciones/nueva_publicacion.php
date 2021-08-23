<?php
    include("../head/head.php");
    include("backend/query.php");
?><br>
<link rel="stylesheet" href="nueva.css">
<div id="fondo" style="background-image: url('../../img/fondo.jpg');
        background-attachment:fixed;
        background-size: cover;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0px;
        z-index: -10;
        filter: blur(8px);">
    .
</div>
<form action="backend/insert_publicacion.php" method="post" enctype="multipart/form-data">

<div class="nuevofull" id="uno" >
    <div id="boxfull">
        <div class="contenido" id="contenido1">
            <div id="logo">
                <strong>Tipo de inmueble</strong> 
            </div>
            <div id="campos" class="row">
                <div class="col-md-12"><br>
                    <select class="form-control" name="tipo_inmueble" id="tipo_inmueble">
                        <option value="Casa">Casa</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Local">Local</option>
                        <option value="Nave">Nave</option>
                        <option value="Finca">Finca</option>
                        <option value="Villa">Villa</option>
                        <option value="Solar">Solar</option>
                    </select>
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="">Cancelar</a>

            <a class="btn btn-success" id="continuar1">Continuar</a>
        </div>
    </div>
</div>
<!-- Provincia--->
<div class="nuevofull" id="dos" >
    <div id="boxfull">
        <div class="contenido" id="contenido2">
            <div id="logo">
                <strong>Localizacion</strong> <br> Provincia
            </div>
            <div id="campos" class="row">
                <div class="col-md-12"><br>
                    <select class="form-control campo" name="provincia" id="provincias">
                        <option value="Santo Domingo">Santo Domingo</option>
                        <option value="Santiago">Santiago</option>
                        <option value="San Cristóbal">San Cristóbal</option>
                        <option value="La Vega">La Vega</option>
                        <option value="Puerto Plata">Puerto Plata</option>
                        <option value="San Pedro de Macorís">San Pedro de Macorís</option>
                        <option value="Duarte">Duarte</option>
                        <option value="La Altagracia">La Altagracia</option>
                        <option value="La Romana">La Romana</option>
                        <option value="San Juan">San Juan</option>
                        <option value="Espaillat">Espaillat</option>
                        <option value="Azua">Azua</option>
                        <option value="Barahona">Barahona</option>
                        <option value="Monte Plata">Monte Plata</option>
                        <option value="Peravia">Peravia</option>
                        <option value="Monseñor Nouel">Monseñor Nouel</option>
                        <option value="Valverde">Valverde</option>
                        <option value="Sánchez Ramírez">Sánchez Ramírez</option>
                        <option value="María Trinidad Sánchez">María Trinidad Sánchez</option>
                        <option value="Montecristi">Montecristi</option>
                        <option value="Samaná">Samaná</option>
                        <option value="Bahoruco">Bahoruco</option>
                        <option value="Hermanas Mirabal">Hermanas Mirabal</option>
                        <option value="El Seibo">El Seibo</option>
                        <option value="Hato Mayor">Hato Mayor</option>
                        <option value="Dajabón">Dajabón</option>
                        <option value="Elías Piña">Elías Piña</option>
                        <option value="San José de Ocoa">San José de Ocoa</option>
                        <option value="Santiago Rodríguez">Santiago Rodríguez</option>
                        <option value="Independencia">Independencia</option>
                        <option value="Pedernales">Pedernales</option>
                    </select>
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras1">Atras</a>
            <a class="btn btn-success" id="continuar2">Continuar</a>
        </div>
    </div>
</div>
<!--Listado de municipios pertenecientes a la provincia seleccionada-->
<div class="nuevofull" id="tres" >
    <div id="boxfull">
        <div class="contenido" id="contenido3">
            <div id="logo">
                <strong>Localizacion</strong>  <br> Municipio
            </div>
            <div id="campos" class="row">
                <div class="col-md-12" id="select_municipio"><br>
                    <br>
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras2">Atras</a>
            <a class="btn btn-success" id="continuar3">Continuar</a>
        </div>
    </div>
</div>
<!--Listado de sectores pertenecientes al municipio seleccionado-->

<div class="nuevofull" id="cuatro" >
    <div id="boxfull">
        <div class="contenido" id="contenido4">
            <div id="logo">
                <strong>Localizacion</strong>  <br> Sector
            </div>
            <div id="campos" class="row">
                <div class="col-md-12" id="select_sector"><br>
                    <br>
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras3">Atras</a>
            <a class="btn btn-success" id="continuar4">Continuar</a>
        </div>
    </div>
</div>

<!--Ubicacion en el mapa-->

<div class="nuevofull" id="cinco">
    <div id="boxfull">
        <div class="contenido" id="contenido5">
            <div id="logo">
                <strong>Localizacion</strong>  <br> Ubicacion en mapa
            </div>
            <div id="campos" class="row">
                <div class="col-md-12"><br>
                    <input class="form-control" placeholder="Longitud" type="text" name="longitud" id="">
                </div>
                <div class="col-md-12"><br>
                    <input class="form-control" placeholder="Latitud" type="text" name="latitud" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras4">Atras</a>
            <a class="btn btn-success" id="continuar5">Continuar</a>
        </div>
    </div>
</div>

<!-- Titulo y descripcion--->

<div class="nuevofull" id="seis" >
    <div id="boxfull">
        <div class="contenido" id="contenido6">
            <div id="logo">
                <strong>Informacion</strong>  <br> Titulo y descripcion
            </div>
            <div id="campos" class="row">
                <div class="col-md-12"><br>
                    <input class="form-control" placeholder="Titulo" type="text" name="titulo" id="">
                </div>
                <div class="col-md-12"><br>
                <textarea class="form-control" name="descripcion" maxlength="250" placeholder="Descripcion" id=""></textarea>
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras5">Atras</a>
            <a class="btn btn-success" id="continuar6">Continuar</a>
        </div>
    </div>
</div>
<!-- Formato de viviendas--->
<div class="nuevofull" id="siete" >
    <div id="boxfull">
        <div class="contenido" id="contenido7">
            <div id="logo">
                <strong>Informacion</strong>  <br> formato
            </div>
            <hr>
            <div id="campos" class="row">
                <div class="col-md-4">
                    <label for="">Condominio</label>
                    <input type="checkbox" value="1" name="condominio" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Residencial</label>
                    <input type="checkbox" value="1" name="residencial" id="">
                </div>
                <div class="col-md-4">
                    <label for="">Cerrado</label>
                    <input type="checkbox" value="1" name="cerrado" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras6">Atras</a>
            <a class="btn btn-success" id="continuar7">Continuar</a>
        </div>
    </div>
</div>

<!--distribucion principal--->

<div class="nuevofull" id="ocho" >
    <div id="boxfull">
        <div class="contenido" id="contenido8">
            <div id="logo">
                <strong>Distribucion</strong>  <br> Distribucion
            </div>
            <div id="campos" class="row"> 
                <div class="col-md-3" id="habitaciones"><br>
                    <input class="form-control" type="number" placeholder="Habitaciones" name="habitaciones" >
                </div>
                <div class="col-md-3"  id="baños"><br>
                    <input class="form-control" type="number" placeholder="Baños" name="baños">
                </div>
                <div class="col-md-3" id="parqueos"><br>
                    <input class="form-control"  type="number" placeholder="Parqueos" name="parqueos" >
                </div>
                <div class="col-md-3" id="niveless"><br>
                    <input class="form-control" type="number" placeholder="Niveles" name="niveles" id="niveles">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras7">Atras</a>
            <a class="btn btn-success" id="continuar8">Continuar</a>
        </div>
    </div>
</div>

<!--distribucion secundaria--->


<div class="nuevofull" id="nueve" >
    <div id="boxfull">
        <div class="contenido" id="contenido9">
            <div id="logo">
                <strong>Distribucion</strong>  <br> Componentes
            </div>
            <hr>
            <div id="campos" class="row">
                <div class="col-md-4"  id="piscina">
                    <label for="">Piscina</label>
                    <input type="checkbox" value="1" name="piscina">
                </div>
                <div class="col-md-4" id="jardin">
                    <label for="">Jardin</label>
                    <input type="checkbox" value="1" name="jardin" >
                </div>
                <div class="col-md-4" id="terraza">
                    <label for="">Terraza</label>
                    <input type="checkbox" value="1" name="terraza" >
                </div>
                <div class="col-md-4" id="area_lavado">
                    <label for="">Area de lavado</label>
                    <input type="checkbox" value="1" name="area_lavado" >
                </div>
                <div class="col-md-4" id="balcon">
                    <label for="">Balcon</label>
                    <input type="checkbox"  value="1" name="balcon" >
                </div>
                <div class="col-md-4" id="jacuzzi">
                    <label for="">Jacuzzi</label>
                    <input type="checkbox"  value="1" name="jacuzzi" >
                </div>
                <div class="col-md-4" id="area_de_ninos">
                    <label for="">Area de niños</label>
                    <input type="checkbox"  value="1" name="area_de_ninos" >
                </div>
                <div class="col-md-4" id="gimnasio">
                    <label for="">Gimnasio</label>
                    <input type="checkbox"  value="1" name="gimnasio" >
                </div>
                <div class="col-md-4" id="vigilancia">
                    <label for="">Vigilancia</label>
                    <input type="checkbox"  value="1" name="vigilancia" >
                </div>
                <div class="col-md-4" id="ascensor">
                    <label for="">Ascensor</label>
                    <input type="checkbox"  value="1" name="ascensor" >
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras8">Atras</a>
            <a class="btn btn-success" id="continuar9">Continuar</a>
        </div>
    </div>
</div>

<!-- Terreno--->

<div class="nuevofull" id="diez" >
    <div id="boxfull">
        <div class="contenido" id="contenido10">
            <div id="logo">
                <strong>Distribucion</strong>  <br> Terreno
            </div>

            <div id="campos" class="row">
                <div class="col-md-6"><br>
                    <input class="form-control" type="number" placeholder="Mt2 de terreno" name="mt2_terreno" id="">
                </div>
                <div class="col-md-6"><br>
                    <input class="form-control" type="number" placeholder="Mt2 de construccion" name="mt2_construccion" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras9">Atras</a>
            <a class="btn btn-success" id="continuar10">Continuar</a>
        </div>
    </div>
</div>

<!-- contratos--->


<div class="nuevofull" id="once" >
    <div id="boxfull">
        <div class="contenido" id="contenido11">
            <div id="logo">
                <strong>Contrato</strong>  <br> Tipo de contrato
            </div>
            <hr>
            <div id="campos" class="row">
                <div class="col-md-6">
                    <label for="">Alquiler</label>
                    <input type="radio" value="Alquiler" name="tipo_contrato" id="alquiler">
                </div>
                <div class="col-md-6">
                    <label for="">Venta</label>
                    <input checked type="radio" value="Venta" name="tipo_contrato" id="venta">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras10">Atras</a>
            <a class="btn btn-success" id="continuar11">Continuar</a>
        </div>
    </div>
</div>


<div class="nuevofull" id="doce" >
    <div id="boxfull">
        <div class="contenido" id="contenido12">
            <div id="logo">
                <strong>Contrato</strong>  <br> Alquiler
            </div>

            <div id="campos" class="row">
                <div class="col-md-6"><br>
                    <select class="form-control" name="tipo_deposito" id="">
                        <option value="Sin deposito previo">Sin deposito previo</option>
                        <option value="Un mes adelantado">Un mes adelentado</option>
                        <option value="Un mes + 1">Un mes + 1</option>
                        <option value="Dos + 1">Dos + 1</option>
                    </select>
                </div>
                <div class="col-md-6"><br>
                    <input class="form-control" type="number" value="0" placeholder="Pago mensual" name="cuotas" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras11">Atras</a>
            <a class="btn btn-success" id="continuar12">Continuar</a>
        </div>
    </div>
</div>

<div class="nuevofull" id="trece" >
    <div id="boxfull">
        <div class="contenido" id="contenido13">
            <div id="logo">
                <strong>Contrato</strong>  <br> Venta
            </div>

            <div id="campos" class="row">
                <div class="col-md-6"><br>
                    <input class="form-control" type="number" placeholder="Valor de venta" name="precio_completo" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras12">Atras</a>
            <a class="btn btn-success" id="continuar13">Continuar</a>
        </div>
    </div>
</div>

<div class="nuevofull" id="catorce" >
    <div id="boxfull">
        <div class="contenido" id="contenido14">
            <div id="logo">
                <strong>Foto principal</strong>  <br>
            </div>

            <div id="campos" class="row">
                <div class="col-md-12"><br>
                    <input class="form-control" type="file" name="foto" id="">
                </div>
            </div>
            <hr>
            <a class="btn btn-dark" id="atras13">Atras</a>
            <button class="btn btn-success" id="continuar14">Guardar</button>
        </div>
    </div>
</div>
</form>
<div style="margin-top: 100px;">
    <?php
        include("../pie/pie.html");
    ?>
</div>
<script src="publicaciones.js"></script>
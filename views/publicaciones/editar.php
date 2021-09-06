<?php
    include("../head/head.php");
    include("backend/leer_uno.php");
?>
<link rel="stylesheet" href="../home/home.css">

<div id="contenedor">
    <div id="explicacion">
        <p class="title"> <strong>Tus publicaciones</strong></p>
        En esta sección <strong> Tus publicaciones</strong> podrás ver todos los inmobiliarios que has publicado, seleccionarlos, editarlos y eliminarlos, podrás darle seguimiento de las visitas y confirmar quienes la visitan para poder darle un seguimiento a tus posibles clientes
    </div>
    <div id="fondo">
        .
    </div>
    <form action="backend/editar.php" method="post">
    <div id="box-full">
       <h4>Editando: <?php echo $datos["titulo"]; ?></h4>
       <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
       <input class="form-control" type="text" value="<?php echo $datos["titulo"];?>" name="titulo" id="" placeholder="Titulo"><br>
       <textarea class="form-control" name="descripcion" id="" placeholder="descripcion" rows="5"><?php echo $datos["descripcion"] ?></textarea><br>
       <select class="form-control col-md-6" name="tipo_inmueble" id="">
            <option value="<?php echo $datos["tipo_inmueble"]; ?>"><?php echo $datos["tipo_inmueble"]; ?></option>
            <option value="Casa">Casa</option>
            <option value="Apartamento">Apartamento</option>
            <option value="Local">Local</option>
            <option value="Nave">Nave</option>
            <option value="Finca">Finca</option>
            <option value="Villa">Villa</option>
            <option value="Solar">Solar</option>
       </select><br>
       <select class="form-control col-md-6" name="provincia" id="provincias">
            <option value="<?php echo $datos["provincia"]; ?>"><?php echo $datos["provincia"]; ?></option>
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
       </select><br>
       Municipio
       <div class="col-md-12" id="selec
       Mt_municipio"><br>
            <br>
        </div><br>
        Sector
        <input type="text" class="form-control" value="<?php echo $datos["sector"]; ?>" name="sector" id=""><br>
        Longitud
       <input class="form-control" placeholder="longitud" value="<?php echo $datos["longitud"]; ?>" type="text" name="latitud" id=""><br>
       Latitud
       <input class="form-control" placeholder="latitud" value="<?php echo $datos["longitud"]; ?>" type="text" name="longitud" id=""><br>
       <select class="form-control" name="tipo_contrato" id="">
           <option value="<?php echo $datos["tipo_contrato"]; ?>"><?php echo $datos["tipo_contrato"]; ?></option>
           <option value="Alquiler">Alquiler</option>
           <option value="Venta">Venta</option>
       </select><br>
       Residencial
       <select class="form-control" name="residencial" id="">
           <option value="<?php if($datos["residencial"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["residencial"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Condominio
       <select class="form-control" name="condominio" id="">
            <option value="<?php if($datos["condominio"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["condominio"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Cerrado
       <select class="form-control" name="cerrado" id="">
       <option value="<?php if($datos["cerrado"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["cerrado"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Piscina
       <select class="form-control" name="piscina" id="">
       <option value="<?php if($datos["piscina"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["piscina"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Jardin
       <select class="form-control" name="jardin" id="">
       <option value="<?php if($datos["jardin"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["jardin"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Terraza
       <select class="form-control" name="terraza" id="">
       <option value="<?php if($datos["terraza"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["terraza"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
        Balcon
       <select class="form-control" name="balcon" id="">
       <option value="<?php if($datos["balcon"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["balcon"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Gimnasio
       <select class="form-control" name="gimnasio" id="">
       <option value="<?php if($datos["gimnasio"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["gimnasio"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Jacuzzi
       <select class="form-control" name="jacuzzi" id="">
       <option value="<?php if($datos["jacuzzi"]==0){echo '0';}else{echo '1';}?>">
               <?php if($datos["jacuzzi"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Vigilancia
       <select class="form-control" name="vigilancia" id="">
       <option value="<?php if($datos["vigilancia"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["vigilancia"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Ascensor
       <select class="form-control" name="ascensor" id="">
       <option value="<?php if($datos["ascensor"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["ascensor"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Area de niños
       <select class="form-control" name="area_ninos" id="">
       <option value="<?php if($datos["area_de_ninos"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["area_de_ninos"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
       Area de lavado
       <select class="form-control" name="area_lavado" id="">
       <option value="<?php if($datos["area_lavado"]==0){echo '0';}else{echo '1';} ?>">
               <?php if($datos["area_lavado"]==0){
                   echo ("NO");
                }
                else{
                    echo ("SI");
                } ?>
            </option>
            <option value="1">SI</option>
            <option value="0">NO</option>
       </select><br>
        Mt2 Construccion
       <input class="form-control" type="text" value="<?php echo $datos["mt2_construccion"]; ?>" name="mt2_construccion" id="" placeholder="Mt2 de construccion"> <br>
       Mt2 Terreno
       <input class="form-control" type="text" value="<?php echo $datos["mt2_terreno"]; ?>" name="mt2_terreno" id="" placeholder="Mt2 de terreno"><br>
       Niveles
       <input class="form-control" type="number" value="<?php echo $datos["niveles"]; ?>" name="niveles" id="" placeholder="Niveles"><br>
       Habitaciones
       <input class="form-control" type="number" value="<?php echo $datos["habitaciones"]; ?>" name="habitaciones" id="" placeholder="habitaciones"><br>
       Banos
       <input class="form-control" type="number" value="<?php echo $datos["banos"]; ?>" name="banos" id="" placeholder="baños"><br>
       Parqueos
       <input class="form-control" type="Number" value="<?php echo $datos["parqueos"]; ?>" name="parqueos" id="" placeholder="Parqueos"><br>
       Mensualidad
       <input class="form-control" type="Number" value="<?php echo $datos["cuotas"]; ?>" name="cuotas" id="" placeholder="Mensualidad"><br>
       <select class="form-control" name="tipo_deposito" id="">
                <option value="<?php echo $datos["tipo_deposito"]; ?>"><?php echo $datos["tipo_deposito"]; ?></option>
                <option value="Sin deposito previo">Sin deposito previo</option>
                <option value="Un mes adelantado">Un mes adelentado</option>
                <option value="Un mes + 1">Un mes + 1</option>
                <option value="Dos + 1">Dos + 1</option>
       </select><br>
       Precio de venta
       <input class="form-control " type="Number" value="<?php echo $datos["precio_completo"]; ?>" name="precio" id="" placeholder="Precio">
       <br><button class="btn btn-success">Guardar cambios</button>

    </div>
    </form>
</div>

<?php
    include("../pie/pie.html");
?>
<script src="publicaciones.js"></script>
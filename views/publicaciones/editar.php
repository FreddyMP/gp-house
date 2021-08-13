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
    <div id="box-full">
       <h4>Editando: <?php echo $datos["titulo"]; ?></h4>
       <input class="form-control" type="text" value=" <?php echo $datos["titulo"]; ?>" name="titulo" id="" placeholder="Titulo"><br>
       <textarea class="form-control" name="" id="" placeholder="Descripcion" rows="5"> <?php echo $datos["descripcion"]; ?></textarea><br>
       <select class="form-control" name="" id="">
            <option value="Casa"><?php echo $datos["tipo_inmueble"]; ?></option>
            <option value="Casa">Casa</option>
            <option value="Apartamento">Apartamento</option>
            <option value="Local">Local</option>
            <option value="Nave">Nave</option>
            <option value="Finca">Finca</option>
            <option value="Villa">Villa</option>
            <option value="Solar">Solar</option>
       </select><br>
       <select class="form-control" name="" id="provincias">
            <option value="Casa"><?php echo $datos["provincia"]; ?></option>
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
       <div class="col-md-12" id="select_municipio"><br>
            <br>
        </div><br>
        <input type="text" class="form-control" value="<?php echo $datos["sector"]; ?>" name="" id=""><br>
       <input class="form-control" placeholder="longitud" value="<?php echo $datos["longitud"]; ?>" type="text" name="" id=""><br>
       <input class="form-control" placeholder="latitud" value="<?php echo $datos["longitud"]; ?>" type="text" name="" id=""><br>
       <select class="form-control" name="" id="">
           <option value=""><?php echo $datos["tipo_contrato"]; ?></option>
           <option value="">Alquiler</option>
           <option value="">Venta</option>
       </select><br>
       Residencial
       <select class="form-control" name="" id="">
           <option value="<?php if($datos["residencial"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
            <option value="<?php if($datos["condominio"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["cerrado"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["piscina"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["jardin"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["terraza"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["balcon"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["gimnasio"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["jacuzzi"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["vigilancia"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["ascensor"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["area_de_ninos"]==0){echo ("NO");}else{echo ("SI");} ?>">
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
       <select class="form-control" name="" id="">
       <option value="<?php if($datos["area_lavado"]==0){echo ("NO");}else{echo ("SI");} ?>">
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

       <input class="form-control" type="text" value="<?php echo $datos["mt2_construccion"]; ?>" name="" id="" placeholder="Mt2 de construccion"> <br>
       <input class="form-control" type="text" value="<?php echo $datos["mt2_terreno"]; ?>" name="" id="" placeholder="Mt2 de terreno"><br>
       <input class="form-control" type="number" value="<?php echo $datos["niveles"]; ?>" name="" id="" placeholder="Niveles"><br>
       <input class="form-control" type="number" value="<?php echo $datos["habitaciones"]; ?>" name="" id="" placeholder="habitaciones"><br>
       <input class="form-control" type="number" value="<?php echo $datos["banos"]; ?>" name="" id="" placeholder="baños"><br>
       <input class="form-control" type="Number" value="<?php echo $datos["parqueos"]; ?>" name="" id="" placeholder="Parqueos"><br>
       <input class="form-control" type="Number" value="<?php echo $datos["cuotas"]; ?>" name="" id="" placeholder="Mensualidad"><br>
       <select class="form-control" name="" id="">
                <option value="<?php echo $datos["tipo_deposito"]; ?>"><?php echo $datos["tipo_deposito"]; ?></option>
                <option value="Sin deposito previo">Sin deposito previo</option>
                <option value="Un mes adelantado">Un mes adelentado</option>
                <option value="Un mes + 1">Un mes + 1</option>
                <option value="Dos + 1">Dos + 1</option>
       </select><br>
       <input class="form-control" type="Number" value="<?php echo $datos["precio_completo"]; ?>" name="" id="" placeholder="Precio">
       <br><button class="btn btn-success">Guardar cambios</button>

    </div>
</div>

<?php
    include("../pie/pie.html");
?>
<script src="publicaciones.js"></script>
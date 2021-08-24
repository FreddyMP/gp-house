<?php
    include("../head/head.php");
  
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
        <div id="search">
            <input type="text" class="form-control" placeholder="Buscar inmobiliario">
        </div>
        <?php
            include("backend/listado_publicaciones.php");
            while($info = $lista_publicaciones->fetch_assoc()){
        ?>
        <div id="publicaciones-list">
            <div id="publicacion">
                <div class="row">
                    <div class="col-md-3" style=" height:200px; border-radius:8px; background-image: url(../../asset/<?php echo $info["foto_principal"];?>); background-size:cover; ">
                      
                    </div>
                    <div class="col-md-6">
                        <p> <strong><?php echo $id." ".$info["titulo"];?></strong></p>
                        <p><?php echo $info["descripcion"];?></p>
                    </div>
                    <div class="col-md-3 row">
                        <div class='col-md-12'>
                            <a class="btn btn-success col-md-12 " style="margin-bottom: 15px;"> <small>Ver Publicacion</small></a> <br>
                            <a href="subir_fotos.php?id=<?php echo $info["id_publicacion"];?>" class="btn btn-success col-md-12 " style="margin-bottom: 15px;"> <small>Fotos</small></a> <br>
                            <a href="editar.php?id=<?php echo $info["id_publicacion"];?>" class="btn btn-success  col-md-12 "style="margin-bottom: 15px;"> <small>Editar</small></a> <br> 
                            <a class="btn btn-success col-md-12 "  data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $info["id_publicacion"];?>"> <small>Eliminar</small></a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $info["id_publicacion"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $info["titulo"];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><?php echo $info["descripcion"];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="backend/eliminar_publicacion.php?id=<?php echo $info["id_publicacion"];?>" type="button" class="btn btn-Danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>
<hr>
        <?php
            }
        ?>
    </div>
</div>

<?php
    include("../pie/pie.html");
?>
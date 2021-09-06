<?php
    include("../head/head.php");
    include("backend/leer_uno.php");
    include("backend/fotos.php");
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
    <form action="backend/subir_foto.php" method="post" enctype="multipart/form-data">
        <div id="box-full">
        <h4>Editando: <?php echo $datos["titulo"]; ?></h4>
        Foto principal- <a href="">Cambiar</a>
        <img class="img-fluid" src="../../asset/<?php echo $datos["foto_principal"]; ?>" alt=""><br>
            <div>
             <?php
              $id_publicacion = $_GET["id"];
              $fotos = $conexion->query("SELECT nombre, id_publicacion FROM fotos where id_publicacion = $id_publicacion");
                while($lista_fotos = $fotos->fetch_assoc()){
                    ?><hr>
                        <a class="btn btn-danger" href="">Eliminar</a><br>
                        <img style="padding-top:25px"  class="img-fluid" src="../../asset/<?php echo $lista_fotos["nombre"]; ?>" alt="" srcset="">
                    <?php
                }
             ?>
            </div><br>
            <div>
                <a class="btn btn-info-dark col-md-12">Subir otra imagen</a>
            </div><br>
            <input class="form-control" value="<?php echo $_GET["id"] ?>" type="hidden" name="id_publicacion"><br>

            <input class="form-control" type="file" name="foto"><br>
            <button class="btn btn-success col-md-12">Guardar</button>

        </div>
    </form>
</div>

<?php
    include("../pie/pie.html");
?>
<script src="publicaciones.js"></script>
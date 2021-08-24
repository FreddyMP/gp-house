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
       Foto principal- <a href="">Cambiar</a>
       <img class="img-fluid" src="../../asset/<?php echo $datos["foto_principal"]; ?>" alt=""><br>
        <div>
            otras imagenes
        </div><br>
        <div>
            <button class="btn btn-success col-md-12">Subir otra imagen</button>
        </div>
    </div>
    </form>
</div>

<?php
    include("../pie/pie.html");
?>
<script src="publicaciones.js"></script>
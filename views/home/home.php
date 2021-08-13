<?php
    include("../head/head.php");
?>
<link rel="stylesheet" href="home.css">
<div id="contenedor">
    <div id="explicacion">
        <p class="title"> <strong>Tus publicaciones</strong></p>
        En esta sección <strong> Tus publicaciones</strong> podrás ver todos los inmobiliarios que has publicado, seleccionarlos, editarlos y eliminarlos, podrás darle seguimiento de las visitas y confirmar quienes la visitan para poder darle un seguimiento a tus posibles clientes
    </div>
    <div id="box-full">
        <div id="search">
            <input type="text" class="form-control" placeholder="Buscar inmobiliario">
        </div>
        <div id="publicaciones-list">
            <div id="publicacion">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../../img/casa.jpg" width="150" alt="">
                    </div>
                    <div class="col-md-6">
                        <p> <strong>Hermosa casa de 2 pisos en Piantini</strong></p>
                        <p>Esta hermosa casa se encuentra ubicada a 2 minutos de la avenida principal, con terminacion de primera...</p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn boton1"> <small>Editar</small></button> 
                        <button class="btn btn boton1 boton2"> <small>Eliminar</small></button> <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include("../pie/pie.html");
?>
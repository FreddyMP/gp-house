<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="registro.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--- Tipo de cuenta --->
<form action="backend/nuevo_agente.php" method="post">
<div id="loginfulluno">
    <div id="boxfull">
        <div id="contenido" class="contenido1">
            <div id="logo">
                <img src="../../img/house-icon.png" width="50" alt=""> GP-HOUSE
            </div>
                <div id="campos" class="row">
                    <div class="col-md-12">
                        Eres:
                            <div class="row">
                                <div class="col-md-6"><br>
                                    <input type="radio" value="Agente" name="tipo" checked >
                                    Agente inmobiliario
                                </div>
                                <div class="col-md-6"><br>
                                    <input type="radio" value="Agencia" name="tipo">
                                    Agencia inmobiliaria
                                </div>
                            </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-dark back-"><small>Cancelar</small> </a>
                    </div>
                    <div class="col-md-6">
                        <a class=" btn btn diez-pixeles" id="continuar1"><small>Continuar</small> </a>
                    </div>
                </div>  
        </div>
    </div>
</div>
<!---Nombre completo-->
<div id="loginfulldos" >
    <div id="boxfull">
        <div class="contenido" id="contenido2">
            <div id="logo">
                <img src="../../img/house-icon.png" width="50" alt=""> GP-HOUSE
            </div>
                <div id="campos" class="row">
                    <div class="col-md-12"><br>
                       <input type="text" class="form-control" placeholder="Ingresa tu nombre completo" name="nombre" id="">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn oscuro back-" id="atras1"><small>Atras</small> </a>
                    </div>
                    <div class="col-md-6">
                        <a class=" btn btn diez-pixeles" id="continuar2"><small>Continuar</small> </a>
                    </div>
                </div>  
        </div>
    </div>
</div>
<!--- Correo y numero --->
<div id="loginfulltres" >
    <div id="boxfull">
        <div class="contenido" id="contenido3">
            <div id="logo">
                <img src="../../img/house-icon.png" width="50" alt=""> GP-HOUSE
            </div>
                <div id="campos" class="row">
                    <div class="col-md-12">
                       <input type="text" class="form-control" placeholder="ejemplo@ejemplo.com" name="correo" id="">
                    </div>
                    <div class="col-md-12"><br>
                        <input type="text" class="form-control" placeholder="000-000-0000" name="telefono" id="">
                     </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn oscuro back-" id="atras2"><small>Atras</small> </a>
                    </div>
                    <div class="col-md-6">
                        <a class=" btn btn diez-pixeles" id="continuar3"><small>Continuar</small> </a>
                    </div>
                </div>  
        </div>
    </div>
</div>

<!--- Contraseñas --->


<div id="loginfullcuatro" >
    <div id="boxfull">
        <div class="contenido" id="contenido4">
            <div id="logo">
                <img src="../../img/house-icon.png" width="50" alt=""> GP-HOUSE
            </div>
                <div id="campos" class="row">
                    <div class="col-md-12">
                       <input type="password" max="20" min="4" class="form-control" placeholder="Ingresa tu contraseña" name="contrasena" id="contrasena1" required>
                    </div>
                    <div class="col-md-12"><br>
                        <input type="password" max="20" min="4" class="form-control" placeholder="Repite tu contraseña" id="contrasena2" required>
                     </div>
                </div>
                <div id="alerta-igualdad" >
                    * Los campos no coinciden
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn oscuro back-" id="atras3"><small>Atras</small> </a>
                    </div>
                    <div class="col-md-6">
                        <button disabled class=" btn btn-success" style="float: right;" id="registrar"><small>Registrar</small> </button>
                    </div>
                </div>  
           
        </div>
    </div>
</div>
</form>
<div class="fixed-bottom">
    <?php
        include("../pie/pie.html");
    ?>
</div>
</body>
</html>


<script src="registro.js"></script>



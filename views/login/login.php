<link rel="stylesheet" href="login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div id="fondo">
    .
</div>
<div id="loginfull">
    <div id="boxfull">
        <div id="contenido">
            <div id="logo">
                <img src="../../img/house-icon.png" width="50" alt=""> GP-HOUSE
            </div>
            <form action="backend/control_access.php" method="post">
                <div id="campos" class="row">
                    <div class="col-md-12"><br>
                        <input type="text" class="form-control" placeholder="Ejemplo@gmail.com"  formControlName="usuario"  name="correo" id="correo">
                    </div>
                    <div class="col-md-12"><br>
                        <input type="password" class="form-control" placeholder="*****" formControlName="pass"  name="password" id="correo">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <a style="float: left;" class="btn btn-dark"><small>Cancelar</small> </a>
                        <button class="btn btn-success diez-pixeles"><small> Login</small></button>                
                        <a href="../registro/registro.php" style="float:right; background-color:white" class=" btn btn diez-pixeles"><small>Registrarse ahora!</small> </a>

                    </div>
                </div>  
            </form>
        </div>
    </div>
</div>
<?php
   if(isset($_GET["log"])){
    ?>
    <script>
        $(document).ready(function(){
            Swal.fire({
            title: 'Usuario o contraseña incorrecto',
            showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
        }
    });
        });
        </script>
<?php
   }
?>
<div class="fixed-bottom">
    <?php
    include("../pie/pie.html");
    ?>
</div>

<?php
    session_start();
    if(isset($_SESSION["correo"])){
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="../head/head.css">
<div id="header-full">
    <div id="header-content">
        <div class="row" id="header-content-top">
            <div id="side-left">
               
                <div class="dropdown">
  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="../../img/house-icon.png" width="40" alt="">
                Real state

  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Mensajeria</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
            </div>
            <div id="side-right">
                <a class="btn btn" id="buttom-upgrade">
                    <small><strong>Upgrade!</strong> </small> 
                </a> 
                <i class="fa fa-bell"></i>
                <img id="photo-perfil" src="../../img/img-peke.jpg" width="45" alt=""/>
                <a style="margin-left:10px" href=""> v</a>
            </div>
        </div>
        <hr style="color: gainsboro;">
        <div id="header-content-bottom">
            <div id="menu">
                <div>
                   <a href="../publicaciones/lista_publicaciones.php"class="enlace-menu-top">Publicaciones</a>
                   <a href="../publicaciones/nueva_publicacion.php" class="enlace-menu-top">Nuevo</a> 
                   <a class="enlace-menu-top">An??lisis</a> 
                   <a class="enlace-menu-top">Configuraci??n</a> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }else{
        header("location:../login/login.php");
    }
?>
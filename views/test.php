<?php
    include("../backend/cone.php");

    $consulta=$conexion->query("SELECT longitud, latitud FROM publicaciones where id_publicacion = 59 ");
    $lectura = $consulta->fetch_assoc();
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15135.134627757727!2d<?php echo $lectura["longitud"]?>!3d<?php echo $lectura["latitud"]?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8851b409677b%3A0xb3be40190db78af1!2sCentro%20M%C3%A9dico%20Luper%C3%B3n!5e0!3m2!1ses-419!2sdo!4v1628441062303!5m2!1ses-419!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
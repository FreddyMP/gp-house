<?php
    include("publicaciones.php");
    include("fotografias.php");
    session_start();

    #Inicializacion de variables que pueden venir vacias


    #Actualizacion de variables 
    if(isset($_POST["titulo"])){
        $titulo= $_POST["titulo"];
        echo "titulo: ". $titulo."<br>";
    }
    if(isset($_POST["vigilancia"])){
        $vigilancia= $_POST["vigilancia"];
        echo "vigilancia: ". $vigilancia."<br>";
    }
    else{
        $vigilancia = 0;
    }
    if(isset($_POST["ascensor"])){
        $ascensor= $_POST["ascensor"];
        echo "ascensor: ". $ascensor."<br>";
    }
    else{
        $ascensor=0;
    }
    if(isset($_POST["tipo_deposito"])){
       $tipo_deposito= $_POST["tipo_deposito"];
       echo "tipo de posito: ". $tipo_deposito."<br>";
    }
    if(isset($_POST["tipo_inmueble"])){
       $tipo_inmueble= $_POST["tipo_inmueble"];
       echo "tipo inmueble : ". $tipo_inmueble."<br>";
    }
    if(isset($_POST["tipo_contrato"])){
        $tipo_contrato= $_POST["tipo_contrato"];
        echo "tipo de contrato: ". $tipo_contrato."<br>";
    }
    if(isset($_POST["parqueos"])){
       if($_POST["parqueos"] > 0){
        $parqueo = $_POST["parqueos"];
        echo "parqueo: ". $parqueo."<br>";
       } 
       else{
        $parqueo = 0;
        echo "parqueo: ". $parqueo."<br>";
        }
      
    }
   
    
    if(isset($_POST["area_de_ninos"])){
       $area_ninos = $_POST["area_de_ninos"];
       echo "Area de niños : ". $area_ninos."<br>";
    }
    else{
        $area_ninos = 0;
        echo "area de niños: ". $area_ninos."<br>";
    }
    if(isset( $_POST["terraza"])){
        $terraza = $_POST["terraza"];
        echo "terraza: ". $terraza."<br>";
    }
    else{
        $terraza = 0;
        echo "terraza: ". $terraza."<br>";
    }
    if(isset($_POST["balcon"])){
      $balcon = $_POST["balcon"];
      echo "balcon : ". $balcon."<br>";
    }
    else{
        $balcon = 0;
        echo "balcon: ". $balcon."<br>";
    }
    if(isset($_POST["gimnasio"])){
       $gimnasio = $_POST["gimnasio"];
       echo "gimnasio : ". $gimnasio."<br>";
    }
    else{
        $gimnasio = 0;
        echo "gimanasio: ". $gimnasio."<br>";
    }
    if(isset( $_POST["jacuzzi"])){
        $jacuzzi = $_POST["jacuzzi"];
        echo "Jacuzzi : ". $jacuzzi."<br>";
    }
    else{
        $jacuzzi = 0;
        echo "Jacuzzi: ". $jacuzzi."<br>";
    }
    if(isset($_POST["descripcion"])){
        $descripcion = $_POST["descripcion"];
        echo "Descripcion: ". $descripcion."<br>";
    }
    
    if(isset($_POST["provincia"])){
        $provincia= $_POST["provincia"];
        echo "provincia: ". $provincia."<br>";
    }
    if(isset($_POST["municipio"])){
        $municipio = $_POST["municipio"];
        echo "Municipio: ". $municipio."<br>";
    }
    if(isset($_POST["longitud"])){
       $longitud= $_POST["longitud"];
       echo "longitud: ". $longitud."<br>";
    }
    if(isset($_POST["latitud"])){
        $latitud= $_POST["latitud"];
        echo "latitud: ". $latitud."<br>";
    }
       $id_agente= $_SESSION["id_usuario"];
       echo "Agente : ". $id_agente."<br>";

    if(isset($_POST["sector"])){
        $sector= $_POST["sector"];
        echo "Sector : ". $sector."<br>";
    }
    if(isset($_POST["residencial"])){
       $residencial = $_POST["residencial"];
       echo "residencial: ". $residencial."<br>";
    }
    else{
        $residencial = 0;
        echo "residencial: ". $residencial."<br>";
    }
    if(isset($_POST["condominio"])){
       $condominio = $_POST["condominio"];
       echo "condominio: ". $condominio."<br>";
    }
    else{
        $condominio = 0;
        echo "condominio: ". $condominio."<br>";
    }
    if(isset( $_POST["cerrado"])){
        $cerrado= $_POST["cerrado"];
        echo "cerrado: ". $cerrado."<br>";
    }
    else{
        $cerrado = 0;
        echo "cerrado: ". $cerrado."<br>";
    }
    if(isset($_POST["mt2_construccion"])){
        if($_POST["mt2_construccion"] > 0){
            $mt2_construccion= $_POST["mt2_construccion"];
            echo " Metros construidos: ". $mt2_construccion."<br>";
        }
        else{
            $mt2_construccion= 0;
            echo " Metros construidos: ". $mt2_construccion."<br>";
        } 
    }
    else{
        $mt2_construccion= 0;
        echo " Metros construidos: ". $mt2_construccion."<br>";
    } 

    if(isset($_POST["mt2_terreno"])){
        if($_POST["mt2_terreno"] > 0){
            $mt2_terreno= $_POST["mt2_terreno"];
            echo "Terreno : ". $mt2_terreno."<br>";
        }
        else{
            $mt2_terreno = 0;
            echo "Terreno : ". $mt2_terreno."<br>";
        }
    }
    else{
        $mt2_terreno = 0;
        echo "Terreno : ". $mt2_terreno."<br>";
    }
    if(isset($_POST["niveles"])){
        if($_POST["niveles"] > 0 ){
            $niveles= $_POST["niveles"];
            echo "Niveles: ". $niveles."<br>";
        }
        else{
            $niveles= 0 ;
            echo "Niveles: ". $niveles."<br>";
        } 
    }
    else{
        $niveles= 1;
        echo "Niveles: ". $niveles."<br>";
    }
    if(isset($_POST["habitaciones"])){
        if($_POST["habitaciones"]> 0){
            $habitaciones=$_POST["habitaciones"];
            echo "Habitaciones: ". $habitaciones."<br>";
        }
        else{
            $habitaciones=0;
        echo "Habitaciones: ". $habitaciones."<br>";
        }
        
    }
    else{
        $habitaciones = 0;
    }
    if(isset($_POST["baños"])){
        if($_POST["baños"]> 0){
            $baños= $_POST["baños"];
             echo "Baño : ". $baños."<br>";
        }
        else{
            $baños=0 ;
            echo "Baño : ". $baños."<br>";
        }
        
    }
    else{
        $baños= 0;
    }
    if(isset($_POST["piscina"])){
       $piscina= $_POST["piscina"];
       echo "piscina: ". $piscina."<br>";
    }
    else{
        $piscina = 0;
        echo "piscina: ". $piscina."<br>";
    }
    if(isset($_POST["jardin"])){
        $jardin=$_POST["jardin"];
        echo "jardin : ". $jardin."<br>";
    }
    else{
        $jardin = 0;
        echo "jardin: ". $jardin."<br>";
    }
    if(isset($_POST["cuotas"])){
        $cuotas= $_POST["cuotas"];
        echo "Cuotass: ". $cuotas."<br>";
    }
    else{
        $cuotas=0;
    }
    if(isset($_POST["precio_completo"])){
        if($_POST["precio_completo"]>0){
            $precio_completo= $_POST["precio_completo"];
             echo "precio completo: ". $precio_completo."<br>";
        }
        else{
            $precio_completo= 0;
            echo "precio completo: ". $precio_completo."<br>";
        }
    }
    else{
        $precio_completo=0;
    }
    if(isset($_POST["area_lavado"])){
      $area_lavado= $_POST["area_lavado"];
      echo "area de lavado : ". $area_lavado."<br>";
    } 
    else{
        $area_lavado = 0;
        echo "Area de lavado: ". $area_lavado."<br>";
    }
    
    $foto= $_FILES["foto"]["name"];

    $publicaciones = new Publicaciones();
    echo $foto;
    $fotos_publicacion = new Fotos();


    $publicaciones->insert_publicacion($foto,$titulo,$vigilancia,$ascensor,$tipo_inmueble,$tipo_contrato,$descripcion,$provincia,$municipio, $longitud, $latitud,$id_agente, $sector,$residencial, $condominio, $cerrado, $mt2_construccion, $mt2_terreno,$niveles,$habitaciones,$baños, $piscina, $jardin, $parqueo, $terraza, $balcon, $gimnasio, $jacuzzi, $area_ninos,$cuotas, $precio_completo, $area_lavado, $tipo_deposito );
    
    $publicaciones->last_publicacion();

    include("../../../backend/cone.php");
    $consulta_last= $conexion->query($publicaciones->consulta_query);
    $resultado_last = $consulta_last->fetch_assoc();
    
    echo "<br> <br> <br> <br> <br> <br>". $resultado_last["id_publicacion"];
    $id_last_publicacion = $resultado_last["id_publicacion"];
    $fotos_publicacion->insert_picture($foto, $id_agente, $id_last_publicacion);

    #header("location:../lista_publicaciones.php");
?>
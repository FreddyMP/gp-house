<?php
    
    include("publicaciones.php");
    if(isset($_POST['provincia']))
    {
        include("../../../backend/cone.php");
        $provincia = $_POST["provincia"];
        $municipios = new Publicaciones();
        $municipios->municipios_for_provincia($provincia);
        $municipios_consulta = $conexion->query($municipios->consulta_query);
        ?>
            <select class="form-control campo" name="municipio" id="municipio">
        <?php
            while($lista = $municipios_consulta->fetch_assoc()){ ?>
                <option value="<?php echo $lista["id_municipio"]?>"><?php echo $lista["nombre"]?></option><?php
            }
        ?>
            </select>
        <?php
    }

    #Consulta y carga de los sectores

    if(isset($_POST['municipio']))
    {
        include("../../../backend/cone.php");
        $municipio = $_POST["municipio"];
        $sectores = new Publicaciones();
        $sectores->sectores_for_municipio($municipio);
        $sectores_consulta = $conexion->query($sectores->consulta_query);
        ?>
            <select class="form-control campo" name="sector" id="sectores">
        <?php
            while($lista2 = $sectores_consulta->fetch_assoc()){ ?>
                <option value="<?php echo $lista2["nombre"]?>"><?php echo $lista2["nombre"]?></option><?php
            }
        ?>
            </select>
        <?php
    }
    
?>
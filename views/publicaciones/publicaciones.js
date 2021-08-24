//Cargar la lista de los municipios al seleccionar una provincia y dar a continuar
$("#provincias").change(function(){
    provincia = $("#provincias").val();
    $.ajax({
        type: "post",
        url: "backend/query.php",
        dataType:"HTML",
        data:"provincia="+provincia,
        success: function(data){
            $("#select_municipio").empty();
            $("#select_municipio").append(data);
        }
    });
});
$("#continuar2").click(function(){
    provincia = $("#provincias").val();
    $.ajax({
        type: "post",
        url: "backend/query.php",
        dataType:"HTML",
        data:"provincia="+provincia,
        success: function(data){
            $("#select_municipio").empty();
            $("#select_municipio").append(data);
        }
    });
    $("#contenido2").hide();
    $("#dos").animate({width: "10px"},"slow");
    $("#dos").hide();
    $("#tres").show();
    $("#tres").animate({width: "40%"},"slow");
    $("#contenido3").show(500);
});

//Cargar la lista de los sectores al seleccionar un municipio y dar a continuar


$("#municipio").change(function(){
    municipio = $("#municipio").val();
    $.ajax({
        type: "post",
        url: "backend/query.php",
        dataType:"HTML",
        data:"municipio="+municipio,
        success: function(data){
            $("#select_sector").empty();
            $("#select_sector").append(data);
        }
    });
});
$("#continuar3").click(function(){
    municipio = $("#municipio").val();
    $.ajax({
        type: "post",
        url: "backend/query.php",
        dataType:"HTML",
        data:"municipio="+municipio,
        success: function(data){
            $("#select_sector").empty();
            $("#select_sector").append(data);
        }
    });
    $("#contenido3").hide();
    $("#tres").animate({width: "10px"},"slow");
    $("#tres").hide();
    $("#cuatro").show();
    $("#cuatro").animate({width: "40%"},"slow");
    $("#contenido4").show(500);
    
});
$("#atras1").click(function(){
    $("#contenido2").hide();
    $("#dos").animate({width: "10px"},"slow");
    $("#dos").hide();
    $("#uno").show();
    $("#uno").animate({width: "40%"},"slow");
    $("#contenido1").show(500);
});
$("#atras2").click(function(){
    $("#contenido3").hide();
    $("#tres").animate({width: "10px"},"slow");
    $("#tres").hide();
    $("#dos").show();
    $("#dos").animate({width: "40%"},"slow");
    $("#contenido2").show(500);
});
$("#atras3").click(function(){
    $("#contenido4").hide();
    $("#cuatro").animate({width: "10px"},"slow");
    $("#cuatro").hide();
    $("#tres").show();
    $("#tres").animate({width: "40%"},"slow");
    $("#contenido3").show(500);
});
$("#atras4").click(function(){
    $("#contenido5").hide();
    $("#cinco").animate({width: "10px"},"slow");
    $("#cinco").hide();
    $("#cuatro").show();
    $("#cuatro").animate({width: "40%"},"slow");
    $("#contenido4").show(500);
});
$("#atras5").click(function(){
    $("#contenido6").hide();
    $("#seis").animate({width: "10px"},"slow");
    $("#seis").hide();
    $("#cinco").show();
    $("#cinco").animate({width: "40%"},"slow");
    $("#contenido5").show(500);
});
$("#atras6").click(function(){
    $("#contenido7").hide();
    $("#siete").animate({width: "10px"},"slow");
    $("#siete").hide();
    $("#seis").show();
    $("#seis").animate({width: "40%"},"slow");
    $("#contenido6").show(500);
});
$("#atras7").click(function(){
    $("#contenido8").hide();
    $("#ocho").animate({width: "10px"},"slow");
    $("#ocho").hide();
    if($("#tipo_inmueble").val()== "Nave"){
        $("#seis").show();
        $("#seis").animate({width: "40%"},"slow");
        $("#contenido6").show(500);
    }
    else if($("#tipo_inmueble").val()== "Villa"){
        $("#seis").show();
        $("#seis").animate({width: "40%"},"slow");
        $("#contenido6").show(500);
    }
    else{
        $("#siete").show();
        $("#siete").animate({width: "40%"},"slow");
        $("#contenido7").show(500);
    }
    
});
$("#atras8").click(function(){
    $("#contenido9").hide();
    $("#nueve").animate({width: "10px"},"slow");
    $("#nueve").hide();
    $("#ocho").show();
    $("#ocho").animate({width: "40%"},"slow");
    $("#contenido8").show(500);
});
$("#atras9").click(function(){
    $("#contenido10").hide();
    $("#diez").animate({width: "10px"},"slow");
    $("#diez").hide();
    if($("#tipo_inmueble").val()== "Finca"){
        $("#seis").show();
        $("#seis").animate({width: "40%"},"slow");
        $("#contenido6").show(500);
    }
    else{
        $("#nueve").show();
        $("#nueve").animate({width: "40%"},"slow");
        $("#contenido9").show(500);
    }
});
$("#atras10").click(function(){
    $("#contenido11").hide();
    $("#once").animate({width: "10px"},"slow");
    $("#once").hide();
    $("#diez").show();
    $("#diez").animate({width: "40%"},"slow");
    $("#contenido10").show(500);
});
$("#atras11").click(function(){
    $("#contenido12").hide();
    $("#doce").animate({width: "10px"},"slow");
    $("#doce").hide();
    $("#once").show();
    $("#once").animate({width: "40%"},"slow");
    $("#contenido11").show(500);
});

$("#atras12").click(function(){
    $("#contenido13").hide();
    $("#trece").animate({width: "10px"},"slow");
    $("#trece").hide();
    if($("#alquiler").prop("checked")){
        $("#doce").show();
        $("#doce").animate({width: "40%"},"slow");
        $("#contenido12").show(500);
    }
    else{
        $("#once").show();
    $("#once").animate({width: "40%"},"slow");
    $("#contenido11").show(500);
    }
    
});
$("#atras13").click(function(){
    $("#contenido14").hide();
    $("#catorce").animate({width: "10px"},"slow");
    $("#catorce").hide();
    $("#trece").show();
    $("#trece").animate({width: "40%"},"slow");
    $("#contenido13").show(500);
});
$("#continuar1").click(function(){
    $("#contenido1").hide();
    $("#uno").animate({width: "10px"},"slow");
    $("#uno").hide();
    $("#dos").show();
    $("#dos").animate({width: "40%"},"slow");
    $("#contenido2").show(500);
});

$("#continuar4").click(function(){
    $("#contenido4").hide();
    $("#cuatro").animate({width: "10px"},"slow");
    $("#cuatro").hide();
    $("#cinco").show();
    $("#cinco").animate({width: "40%"},"slow");
    $("#contenido5").show(500);
});
$("#continuar5").click(function(){
    $("#contenido5").hide();
    $("#cinco").animate({width: "10px"},"slow");
    $("#cinco").hide();
    $("#seis").show();
    $("#seis").animate({width: "40%"},"slow");
    $("#contenido6").show(500);
});
$("#continuar6").click(function(){
    $("#contenido6").hide();
    $("#seis").animate({width: "10px"},"slow");
    $("#seis").hide();
    if($("#tipo_inmueble").val()== "Nave"){
        $("#ocho").show();
        $("#ocho").animate({width: "40%"},"slow");
        $("#contenido8").show(500);
        $("#habitaciones").hide();
        $("#niveless").hide();
        $("#piscina").hide();
        $("#area_lavado").hide();
        $("#area_de_ninos").hide();
        $("#jardin").hide();
        $("#balcon").hide();
        $("#gimnasio").hide();
        $("#terraza").hide();
        $("#jacuzzi").hide();
    }
    else if($("#tipo_inmueble").val()== "Finca"){
        $("#diez").show();
        $("#diez").animate({width: "40%"},"slow");
        $("#contenido10").show(500);
    }
    else if($("#tipo_inmueble").val()== "Villa"){
        $("#ocho").show();
        $("#ocho").animate({width: "40%"},"slow");
        $("#contenido8").show(500);
    }
    else{
        $("#siete").show();
        $("#siete").animate({width: "40%"},"slow");
        $("#contenido7").show(500);
    }
});
$("#continuar7").click(function(){
    $("#contenido7").hide();
    $("#siete").animate({width: "10px"},"slow");
    $("#siete").hide();
    if($("#tipo_inmueble").val()== "Apartamento"){
        $("#niveles").attr('placeholder', 'Nivel');
    }
    if($("#tipo_inmueble").val()== "Local"){
        $("#niveles").attr('placeholder', 'Nivel');
        $("#habitaciones").hide();
        $("#piscina").hide();
        $("#area_lavado").hide();
        $("#area_de_ninos").hide();
        $("#balcon").hide();
        $("#terraza").hide();
        $("#jacuzzi").hide();
        $("#jardin").hide();

    }
    $("#ocho").show();
    $("#ocho").animate({width: "40%"},"slow");
    $("#contenido8").show(500);
});
$("#continuar8").click(function(){
    $("#contenido8").hide();
    $("#ocho").animate({width: "10px"},"slow");
    $("#ocho").hide();
    $("#nueve").show();
    $("#nueve").animate({width: "40%"},"slow");
    $("#contenido9").show(500);
});
$("#continuar9").click(function(){
    $("#contenido9").hide();
    $("#nueve").animate({width: "10px"},"slow");
    $("#nueve").hide();
    $("#diez").show();
    $("#diez").animate({width: "40%"},"slow");
    $("#contenido10").show(500);
});
$("#continuar10").click(function(){
    $("#contenido10").hide();
    $("#diez").animate({width: "10px"},"slow");
    $("#diez").hide();
    $("#once").show();
    $("#once").animate({width: "40%"},"slow");
    $("#contenido11").show(500);
});
$("#continuar11").click(function(){
    $("#contenido11").hide();
    $("#once").animate({width: "10px"},"slow");
    $("#once").hide();
    if(document.getElementById("alquiler").checked){
        $("#doce").show();
        $("#doce").animate({width: "40%"},"slow");
        $("#contenido12").show(500);
    }else{
        $("#trece").show();
        $("#trece").animate({width: "40%"},"slow");
        $("#contenido13").show(500);
        
    }
    
});
$("#continuar12").click(function(){
    $("#contenido12").hide();
    $("#doce").animate({width: "10px"},"slow");
    $("#doce").hide();
    if($("#alquiler").attr("checked",true)){
        $("#catorce").show();
        $("#catorce").animate({width: "40%"},"slow");
        $("#contenido14").show(500);
    }
    else{
        $("#trece").show();
        $("#trece").animate({width: "40%"},"slow");
        $("#contenido13").show(500);
    }
    
});
$("#continuar13").click(function(){
    $("#contenido13").hide();
    $("#trece").animate({width: "10px"},"slow");
    $("#trece").hide();
    $("#catorce").show();
    $("#catorce").animate({width: "40%"},"slow");
    $("#contenido14").show(500);
});
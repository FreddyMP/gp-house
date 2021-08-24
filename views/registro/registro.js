$("#continuar1").click(function(){
    $("#loginfulluno").animate({width: "10px"},"slow");
    $("#contenido1").hide();
    $("#loginfulluno").hide();
    $("#loginfulldos").show();
    $("#contenido2").show(400);
    if($(window).width() < 900){
        $("#loginfulldos").animate({width: "70%"},"slow");
    }else{
        $("#loginfulldos").animate({width: "40%"},"slow");
    }
});
$("#continuar2").click(function(){
    $("#loginfulldos").animate({width: "10px"},"slow");
    $("#contenido2").hide();
    $("#loginfulldos").hide();
    $("#loginfulltres").show();
    $("#contenido3").show(400);
    if($(window).width() < 900){
        $("#loginfulltres").animate({width: "70%"},"slow");
    }else{
        $("#loginfulltres").animate({width: "40%"},"slow");
    }
});
$("#continuar3").click(function(){
    $("#loginfulltres").animate({width: "10px"},"slow");
    $("#contenido3").hide();
    $("#loginfulltres").hide();
    $("#loginfullcuatro").show();
    $("#contenido4").show(400);
    if($(window).width() < 900){
        $("#loginfullcuatro").animate({width: "70%"},"slow");
    }else{
        $("#loginfullcuatro").animate({width: "40%"},"slow");
    }
});
$("#contrasena1").keyup(function(){
    if($("#contrasena1").val() == $("#contrasena2").val()){
        if($("#contrasena1").val() != ""){
            $("#alerta-igualdad").hide();
            $("#registrar").attr("disabled",false);
        }
    }
    else{
        $("#alerta-igualdad").show();
        $("#registrar").attr("disabled",true);
    }
});
$("#contrasena2").keyup(function(){
    if($("#contrasena1").val() == $("#contrasena2").val()){
        if($("#contrasena1").val() != ""){
            $("#alerta-igualdad").hide();
            $("#registrar").attr("disabled",false);
        }

    }
    else{
        $("#alerta-igualdad").show();
        $("#registrar").attr("disabled",true);
    }
});

$("#atras1").click(function(){
  alert("funciona");
});

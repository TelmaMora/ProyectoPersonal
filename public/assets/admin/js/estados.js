$(document).ready(function() {
    $.ajax({
    type: "POST",
    url: "procesar-estados.php",
    data: { estados : "Mexico" } 
    }).done(function(data){
    $("#jmr_contacto_estado").html(data);
    });
    // Obtener municipios
    $("#jmr_contacto_estado").change(function(){
    var estado = $("#jmr_contacto_estado option:selected").val();
    $.ajax({
    type: "POST",
    url: "procesar-estados.php",
    data: { municipios : estado } 
    }).done(function(data){
    $("#jmr_contacto_municipio").html(data);
    });
    });
});
var ControlPanel = ControlPanel || (function () {

    
    return{
        
        RegistrarDocente : function (Pnombre,Snombre,Papellido,Sapellido,correo) {
            if(Pnombre == "" && Snombre == "" && Papellido == "" && Sapellido == "" && correo == ""){
                swal("Cuidado","no puede dejar campos vacios","warning");
            }
            else{
                if(ModeloHerramientas.validarEmail(correo)){
                    ModeloPanel.AgregarDocente(Pnombre,Snombre,Papellido,Sapellido,correo);
                }else{
                    swal("Cuidado","Correo invalido","warning");
                }
            }
        },
        
        
    };
    
})();

$(document).ready(function () {
    $('#registrarDocente_Ajax').on('submit', function(form){
        form.preventDefault();
        var Pnombre =   $("#Pnombre").val();
        var Snombre =   $("#Snombre").val();
        var Papellido = $("#Papellido").val();
        var Sapellido = $("#Sapellido").val();
        var correo =    $("#correo").val();
        console.log("entre");
        ModeloPanel.RegistrarDocente(Pnombre,Snombre,Papellido,Sapellido,correo);
    });

});

class Login{

    constructor(){

    }

     login_ajax(usuario,contraseña){
        $.ajax({
            url: "Practict/iniciarSesion",
            type: 'POST',
            data: {
                usuario: usuario,
                contraseña: contraseña,
                Iniciar_session: 'login'
            },
            success: function (data) {
                if(data == 1) {
                    console.log("login entre ...")
                }
            }
        });

    }

    recuperar_ajax(){
        swal({
            title: 'Por favor Ingrese su correo electronico',
            input: 'email',
            showCancelButton: true,
            confirmButtonText: 'Recuperar Contraseña',
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#03b4c8',
            cancelButtonColor: '#dd5e60',
            showLoaderOnConfirm: true,
            preConfirm: function (email) {
                return new Promise(function (resolve, reject) {
                    setTimeout(function() {

                        $.ajax({
                            url: "practict/recuperar",
                            type: 'POST',
                            data: {
                                email: email,
                                recuperar: 'recuperar'
                            },
                            success: function (data) {
                                if(data == 1){
                                    resolve();
                                }
                                else{
                                    reject();
                                }
                            },
                        });
                    }, 2000)
                })
            },
            allowOutsideClick: false
        }).then(function (email) {
            swal({
                type: 'success',
                title: 'Se ha enviado al correo electronico  '+email+' con su nueva contraseña!'
            })
        })

    }

}


var login = new Login();

$(document).ready(function () {

    $('#login_Ajax').on('submit', function(form){
        form.preventDefault();

       var usuario =  $('#usuario').val();
       var contraseña =   $('#contraseña').val();

       login.login_ajax(usuario,contraseña);
    });

})


function olvideC () {
    login.recuperar_ajax();
}
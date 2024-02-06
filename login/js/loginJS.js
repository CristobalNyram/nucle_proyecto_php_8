
function iniciarSesion()
{    
    if( $("#txtusuario").val() == "" )	
    {
        $("#txtusuario").focus();
    }
    else if ( $("#txtpassword").val() == "" )
    {
        $("#txtpassword").focus();
    }
    else 
    {
        $.post('login/iniciarsesion.php', {
            usuariodat   :  $("#txtusuario").val(),
            passworddat  :  $("#txtpassword").val()
        }, respuestaIniciarSesion, 'json')
    }
}

function respuestaIniciarSesion(respuesta)	
{
    $("#limpiar").html(" ");
    switch(respuesta)
    {
        case "02":
            Swal.fire({
               // icon: 'error',
                title: 'DATOS INCORRECTOS',
                text: 'Los datos no coinciden con ninguna cuenta',
                imageUrl: BASE_URL+'/assets/img/Alerts/error/icono.png', // Ruta a la imagen que deseas mostrar
                imageWidth: 170, // Ancho de la imagen en píxeles
                imageHeight: 150, // Alto de la imagen en píxeles
                imageAlt: 'Error', // Texto alternativo de la imagen (opcional)
                title: 'ERROR',
                confirmButtonText: 'OK',
                customClass: {
                    popup: 'swal-bg-custom-error tada',
                    title: 'swal-content-text-title-custom-error',
                    htmlContainer: 'swal-content-text-text-custom-error',
                    confirmButton: "boton-alesss"
                },
              
              })
            //window.location.href = './';
            break;
        case "03":
            alert("Conexion Incorrecta");
            window.location.href = BASE_URL;
            break;
        case "a":
            window.location.href = 'user/client/';
            break;
        case "p":   	 
            window.location.href = 'user/agente/';
            break;
        case "m":   	 
            window.location.href = 'user/admin/';
            break;
    }
}


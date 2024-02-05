function alertaUI( texto ) 
{
    $.blockUI({   
        css: 
        {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        },
        message: '<h1><img src="'+BASE_URL+'/assets/images/loading.gif" /> </h1> '+texto 
    });
}
function alertaUIFin() 
{
    $.unblockUI(); 
}

function cerrarSesion()
{

    $.post(BASE_URL+'/login/logout.php',
    {
    }, respuestaSalir, 'json');
    setTimeout(function() {
        window.location.href = BASE_URL+"/login.php";
    }, 1500); // 1500 milisegundos (1.5 segundos)
}
function respuestaSalir(arg)
{
    console.log("SALIR");
    setTimeout(function() {
        location.href = BASE_URL ;
    }, 2);
}
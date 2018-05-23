
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
    
	if (id=="btn-reg") {
		window.location.replace("../master/registrarEmpleados.php");
    }


    if (id=="btn-bus") {
		window.location.replace("../master/busquedaEmpleados.php");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../master/index.php");
});
$('#btn-salir').click(function(e){
        swal({
            title: "¿Está seguro de que desea salir?",
            text: "Una vez presionado 'OK' tendrá que volver a loguearse",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.replace("../../index.php")
            } 
        });
    });
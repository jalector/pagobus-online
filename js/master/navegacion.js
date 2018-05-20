
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-reg") {
		window.location.replace("../master/registrarEmpleados.html");
    }


    if (id=="btn-bus") {
		window.location.replace("../master/busquedaEmpleados.html");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../master/index.html");
});

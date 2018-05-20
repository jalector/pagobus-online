
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
<<<<<<< HEAD
	if (id=="btn-reg") {
		window.location.replace("../master/registrarEmpleados.html");
    }

=======
	if (id=="btn-registrar-empleados") {
		window.location.replace("../master/registrarEmpleados.html");
		
    }

    if (id=="btn-bempleados") {
		window.location.remplace("../master/busquedaEmpleados.html");
    }
    if (id=="btn-inicio") {
		window.location.replace("../master/index.html");
    }
>>>>>>> 18e6b1f2013edd1f6c1b5936a5ec9543917016b6

    if (id=="btn-bus") {
		window.location.replace("../master/busquedaEmpleados.html");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../master/index.html");
});

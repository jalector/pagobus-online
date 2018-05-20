
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar-empleados") {
<<<<<<< HEAD
		window.location.assign("../master/registrarEmpleados.html");
=======
		window.location.replace("../master/registrarEmpleados.html");
>>>>>>> 18e6b1f2013edd1f6c1b5936a5ec9543917016b6
		
    }

    if (id=="btn-bempleados") {
<<<<<<< HEAD
		window.location.assign("../master/busquedaEmpleados.html");
    }
    if (id=="btn-inicio") {
		window.location.assign("../master/index.html");
=======
		window.location.remplace("../master/busquedaEmpleados.html");
    }
    if (id=="btn-inicio") {
		window.location.replace("../master/index.html");
>>>>>>> 18e6b1f2013edd1f6c1b5936a5ec9543917016b6
    }


    if (id=="btn-salir") {
		swal({
			title: "¿Está seguro de que desea salir?",
			text: "Una vez presionado 'OK' tendrá que volver a loguearse",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				window.location.replace("../../index.html")
			} 
		});
	}
    });

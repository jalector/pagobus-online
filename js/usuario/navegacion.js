
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar") {
		window.location.replace("../usuario/Actualizar_Datos.html");
    }

    if (id=="btn-inicio") {
      window.location.replace("../usuario/index.html");
    }
<<<<<<< HEAD
});
$('#btn-inicio').click(function(e){
	var id = e.target.id;
	if (id=="btn-inicio") {
		window.location.assign("../usuario/index.html");
    }
});
=======
>>>>>>> 18e6b1f2013edd1f6c1b5936a5ec9543917016b6

    if (id=="btn-Vestado") {
		window.location.replace("../usuario/Ver_Estado.html");
    }

<<<<<<< HEAD

$('#btn-salir').click(function(e){
	var id = e.target.id;
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
=======
    });

$('#bar-logo').click(function(e){
	window.location.replace("../usuario/index.html");
});
>>>>>>> 18e6b1f2013edd1f6c1b5936a5ec9543917016b6

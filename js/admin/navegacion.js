
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar") {
		window.location.replace("../../app/admin/registrarUsuario.php");
    }
    if (id=="btn-inicio") {
		window.location.replace("../../app/admin/index.php");
    }

    if (id=="btn-busuario") {
		window.location.replace("../../app/admin/buscarUsuario.php");
	}
		
	if (id=="btn-principal") {
		window.location.replace("../../app/admin/index.php");
	}

    if (id=="btn-archivo") {
		window.location.replace("../../app/admin/archivosPen.php");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../../app/admin/index.php");
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

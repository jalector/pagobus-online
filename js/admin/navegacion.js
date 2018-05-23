
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar") {
		window.location.replace("../admin/registrarUsuario.php");
    }
    if (id=="btn-inicio") {
		window.location.replace("../admin/index.php");
    }

    if (id=="btn-busuario") {
		window.location.replace("../admin/buscarUsuario.php");
	}
		
	if (id=="btn-principal") {
		window.location.replace("../admin/index.php");
	}

    if (id=="btn-archivo") {
		window.location.replace("../admin/archivosPen.php");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../admin/index.php");
});
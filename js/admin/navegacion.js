
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#izq-contenedor').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar") {
		window.location.replace("../admin/registrarUsuario.html");
    }
    if (id=="btn-inicio") {
		window.location.assign("../admin/index.html");
    }

    if (id=="btn-busuario") {
		window.location.replace("../admin/buscarUsuario.html");
	}
		
	if (id=="btn-principal") {
		window.location.replace("../admin/index.html");
	}

    if (id=="btn-archivo") {
		window.location.replace("../admin/archivosPen.html");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../admin/index.html");
});

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


    if (id=="btn-Vestado") {
		window.location.replace("../usuario/Ver_Estado.html");
    }

    });

$('#bar-logo').click(function(e){
	window.location.replace("../usuario/index.html");
});
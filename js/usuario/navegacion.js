
/*
    Nombre: Juan Pablo Gallardo Ochoa
    Descripción: Función para estar navegando entrelas pantallas html
    Fecha: 18 de Mayo del 2018
*/

$('#btn-registrar').click(function(e){
	var id = e.target.id;
	if (id=="btn-registrar") {
		window.location.assign("../usuario/Actualizar_Datos.html");
    }
});

$('#btn-Vestado').click(function(e){
	var id = e.target.id;
    if (id=="btn-Vestado") {
		window.location.assign("../usuario/Ver_Estado.html");
		}
	});

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

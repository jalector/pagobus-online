
/*
    Nombre: Angel Hernández Rivera
    Descripción: Función que muestra el modal al presionar el botón 'Salir'.
    Fecha: 15 de Mayo del 2018
*/

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
	}});

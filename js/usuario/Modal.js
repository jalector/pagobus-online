/*
    Nombre: Angel Hernández Rivera
    Descripción: Función que muestra el modal al presionar el botón 'solicitar baja'.
    Fecha: 15 de Mayo del 2018
*/


$('#btn-solicitabaja').click(function(e){
 var id = e.target.id;
 if (id=="btn-solicitabaja") {
  swal({
    title: "¡Advertencia!",
    text: "¡Una vez presionado 'OK' su perfil será eliminado del sistema!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("La solicitud de baja de sus datos se ha enviado correctamente", {
        icon: "success",
      });
    } 
  });
}});
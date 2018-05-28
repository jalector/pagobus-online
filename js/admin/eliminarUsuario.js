/*
*  Nombre: Juan Pablo Gallardo Ochoa 
*  Descripción: Archivo de js, para Elimiar los datos de un usuario su estado correspondiente
*  y los documentos que le corresponden
*  Fecha: 26 de Mayo 2018
*/

(function(){

//creamos la variable referencia al boton
let btnEliminar = $('#btn-Eliminar');

//guardamos el valor del id asignado al usuario
let id = $("#datos-cont").attr('data-id-usuario');

//funcion cuando hacen clic en el boton eliminar
btnEliminar.on('click',function(){
    swal({
        title: "¿Está seguro de que deseas\nEliminar los datos del usuario?",
        text: "Una vez presionado 'OK' los cambios quedaran grabados",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: "../../php/admin/eliminarUsuario.php",
                type: "POST",
                data:{
                    id: id
                //Aciones si la consulta se hace adecuadamente
                },success:function(data){
                    swal("Los datos han sido eliminados exitosamente", {
                    icon: "success",
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            //Regresamos a la página de buscar usuario  porque ya no exite el que tenímos
                            window.location.replace("../../app/admin/buscarUsuario.php");
                        } 
                    });;                    
                //Acciones si es que la consulta falla
                },failure:function(data){
                    swal("Ha ocurrido un error al guardar los datos\nIntentalo mas tarde", {
                    icon: "warning",
                    });
                }
            });
        } 
    });
});

})();
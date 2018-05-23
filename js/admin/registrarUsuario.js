/*
*  Nombre: Juan Pablo Gallardo Ochoa 
*  Descripción: Archivo de js, para registrar un nuevo usuario en la BD
*  Fecha: 18 de Mayo 2018
*/
let btnGuardar;

btnGuardar = $('#btn-guardar');

btnGuardar.on('click', function(){

    //Creamos variables para referenciar a los componentes
    let btnGuardar, txtNombre, txtApellido, txtContra, txtConfContra,
    txtFechaN, txtColonia, txtDomicilio, txtCorreo;

    //Asignamos los componentes correspondientes a las variables creadas
    
    txtNombre = $('#txt_nombre');
    txtApellido = $('#txt_apellido');
    txtContra = $('#txt_contrasena');
    txtConfContra = $('#txt_confirmCon');
    txtFechaN = $('#txt_fechaNa');
    txtColonia = $('#txt_colonia');
    txtDomicilio = $('#txt_domicilio');
    txtCorreo = $('#txt_correo');
    
    //Revisamos si no hay un campo vacio
    if(txtNombre.val()=='' || txtApellido.val()=='' || txtContra.val()==''||txtConfContra.val()=='' ||
       txtFechaN.val()=='' || txtColonia.val()=='' || txtDomicilio.val()=='' || txtCorreo.val()==''){
        swal("Porfavor completa todos los campos", {
            icon: "warning",
          });
    }else{
        //Verificamos que los campos de contraseña coincidan
        if(txtContra.val() == txtConfContra.val()){
            $.ajax({
                url: "../../php/admin/setUser.php",
                type: "POST",
                data:{
                    nombre: txtNombre.val(),
                    apellido: txtApellido.val(),
                    contra: txtContra.val(),
                    fecha: txtFechaN.val(),
                    colonia: txtColonia.val(),
                    domicilio: txtDomicilio.val(),
                    correo: txtCorreo.val()
                //Aciones si la consulta se hace adecuadamente
                },success:function(data){
                    swal("Los datos han sido guardados exitosamente", {
                    icon: "success",
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            //Limpiamos los campos de la vista
                            window.location.reload();
                        } 
                    });;                    
                //Acciones si es que la consulta falla
                },failure:function(data){
                    swal("Ha ocurrido un error al guardar los datos\nIntentalo mas tarde", {
                    icon: "warning",
                    });
                }
            });
        }else{
            swal("Las Contraseñas no coinciden", {
                icon: "warning",
              });
        }
    }  
});
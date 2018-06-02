/*
*  Nombre: Juan Pablo Gallardo Ochoa 
*  Descripción: Archivo de js, para registrar un nuevo usuario en la BD
*  Fecha: 18 de Mayo 2018
*/
let btnGuardar;

btnGuardar = $('#btn-guardar');

//CODIGO PARA PREVISUALIZAR LA IMAGEN CUANDO UN USUARIO SE REGISTRE
/*document.getElementById("file").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();
    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);
    
    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
      let image = document.getElementById('imagen-s');
      image.src = reader.result;
      image.width='200';
      image.height='200';
    };
  }
*/
btnGuardar.on('click', function(){

    //Creamos variables para referenciar a los componentes
    let btnGuardar, txtNombre, txtApellido, txtContra, txtConfContra,
    txtFechaN, txtColonia, txtDomicilio, txtCorreo;

    //Asignamos los componentes correspondientes a las variables creadas
    
    txtNombre = $('#txt_nombre');
    txtApellido = $('#txt_apellido');
    txtEdad = $('#txt_edad');
    txtContra = $('#txt_contrasena');
    txtConfContra = $('#txt_confirmCon');
    txtFechaC = $('#txt_fechaCo');
    txtColonia = $('#txt_colonia');
    txtDomicilio = $('#txt_domicilio');
    txtCorreo = $('#txt_correo');
    
    //Revisamos si no hay un campo vacio
    if(txtNombre.val()=='' || txtApellido.val()=='' || txtContra.val()==''||txtConfContra.val()=='' ||
       txtFechaC.val()=='' || txtColonia.val()=='' || txtDomicilio.val()=='' || txtCorreo.val()=='' || txtEdad.val()==''){
        swal("Porfavor completa todos los campos", {
            icon: "warning",
          });
    }else{
        //Verificamos que los campos de contraseña coincidan
        if(txtContra.val() == txtConfContra.val()){
            $.ajax({
                url: "../../php/master/setEmpleado.php",
                type: "POST",
                data:{
                    nombre: txtNombre.val(),
                    apellido: txtApellido.val(),
                    edad: txtEdad.val(),
                    contra: txtContra.val(),
                    fecha: txtFechaC.val(),
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
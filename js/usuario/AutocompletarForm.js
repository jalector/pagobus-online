/*
*  Nombre: Angel Hernández Rivera
*  Descripción: Archivo de js, para Mostrar los datos de un usuario
*  y poder actualizar datos del usuario.
*  Fecha: 25 de Mayo 2018
*/
(function(){

    //LLENADO DE CAMPOS PARA LOS DATOS DE USUARIO
    //Variables para referenciar los botones
    let foto, txtNombre, txtApellido, txtContraseña,txtFecha,txtCorreo ,txtColonia, txtDomicilio,fileRecibo,
    fileCredencial;

    //Almacenamos las vistas en variables.
    foto=$('#lbl-profile-image');
    txtNombre = $('#input-nombre');
    txtApellido = $('#input-apellido');
    txtFecha = $('#input-fechan');
    txtColonia = $('#input-colonia');
    txtDomicilio = $('#input-domicilio');
    txtContraseña = $('#input-contraseña');
    txtCorreo= $('#input-mail');
    fileRecibo= $('#input-recibo');
    fileCredencial= $('#input-identificacion');

    let id = $("#der-contenedor").attr('data-id-usuario');

    //Realizamos la consulta de los datos y los agregamos a los campos correspondientes
    $.getJSON("../../php/usuario/datosUsuario.php", {id: id}, function(usuarios){
        $.each(usuarios, function(i,usuario){
            txtContraseña.val(usuario.contrasena);
            txtNombre.val(usuario.nombre);
            txtApellido.val(usuario.apellido);
            txtFecha.val(usuario.f_nacimiento);
            foto.val(usuario.fotografia);
            txtColonia.val(usuario.colonia);
            txtDomicilio.val(usuario.domicilio);
            txtCorreo.val(usuario.correo);


    });
    });
   

})();
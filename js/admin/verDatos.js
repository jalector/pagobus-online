/*
*  Nombre: Juan Pablo Gallardo Ochoa 
*  Descripción: Archivo de js, para Mostrar los datos de un usuario, la tabla de archivos
*  y poder actualizar datos del usuario.
*  Fecha: 19 de Mayo 2018
*/
(function(){

    //LLENADO DE CAMPOS PARA LOS DATOS DE USUARIO
    //Variables para referenciar los botones
    let btnEditar, disabledtxtNombre, txtApellido, txtFecha, txtColonia, txtDomicilio, txtStatus;

    //Almacenamos las vistas en variables.
    btnGuardar = $('#btn-Guardar');
    txtNombre = $('#txt_nombre');
    txtApellido = $('#txt_apellido');
    txtFecha = $('#txt_fNacimiento');
    txtColonia = $('#txt_colonia');
    txtDomicilio = $('#txt_domicilio');
    txtStatus = $('#txt_status');

    let id = $("#datos-cont").attr('data-id-usuario');

    //Realizamos la consulta de los datos y los agregamos a los campos correspondientes
    $.getJSON("../../php/admin/datosUser.php", {id: id}, function(usuarios){
        $.each(usuarios, function(i,usuario){
            txtNombre.val(usuario.nombre);
            txtApellido.val(usuario.apellido);
            txtFecha.val(usuario.fecha);
            txtColonia.val(usuario.colonia);
            txtDomicilio.val(usuario.domicilio);
            txtStatus.val(usuario.estado);
    });
    });

    //CREACION DE TABLA PARA VER LOS ARCHIVOS QUE TIENE RELACIONADO CADA USUARIO
    $.ajax({
        url: "../../php/admin/archDatosUser.php",
        type: "POST",
        data:{
            id: id
        },success:function(data){
            //Se colocan los datos en el contenedor para la tabla
            $('#tablaD-cont')
                .empty()
                .append(createTable(JSON.parse(data)));
        },failure:function(data){
            console.err("No se pueden acutalizar los datos");
        }
    });
    
    function createTable(json){
        let table, th, tb;
        //Determinamos los titulos de las columnas.
        th = $('<thead>', {
            class: 'thead-dark',
            html: [
                $('<th>', {html:'ID'}),
                $('<th>', {html:'Documento'}),
                $('<th>', {html:'Fecha Actualizacion'}),
                $('<th>', {html:'Estado'}),
            ]
        });

        tb = $('<tbody>');
        //Ponemos cada renglon de la tabla.
        json.forEach(function(element, index){
            tb.append($('<tr>',{
                class: 'table-warning',
                html: [
                    $('<th>', {html: element.id}),
                    $('<td>', {html: element.documento}),
                    $('<td>', {html: element.fecha}),
                    $('<td>', {html: element.estado}),
                ]
            }))
        });

        //Ponemos los titulos y los renglones en la tabla.
        table = $('<table>',{
            class: 'table',
            html: [th, tb]
        });
        return table;
    }

    //FUNCION PARA CUANDO SE QUIERAN ACTUALIZAR LOS DATOS
    btnGuardar.on('click',function(){
        swal({
			title: "¿Está seguro de que deseas\nActualizar los datos del usuario?",
			text: "Una vez presionado 'OK' los cambios quedaran grabados",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
                    url: "../../php/admin/actualizarDatodU.php",
                    type: "POST",
                    data:{
                        id: id,
                        nombre: txtNombre.val(),
                        apellido: txtApellido.val(),
                        fecha: txtFecha.val(),
                        colonia: txtColonia.val(),
                        domicilio: txtDomicilio.val(),
                        estado: txtStatus.val()
                    //Aciones si la consulta se hace adecuadamente
                    },success:function(data){
                        swal("Los datos han sido guardados exitosamente", {
                        icon: "success",
                        })
                        .then((willDelete) => {
                            if (willDelete) {
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
			} 
		});
    });
})();
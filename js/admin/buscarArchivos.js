/*
*  Nombre: Juan Pablo Gallardo Ochoa 
*  Descripción: Archivo de js, para buscar a Archivos con estado pendiente y crear tabla.
*  Fecha: 18 de Mayo 2018
*/

(function(){
    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Función la cual realiza la petición php para traer los datos.
     * Fecha: 18 de Mayo del 2018
     */

    //Boton para realizar la busqueda
    let bbutton;

    //Almacenamos las vistas en variables.
    bbutton = $('#botonActualizar');
    btnGuardar = $('#botonGuardar');
    //EVENTO PARA CUANDO SE DESEA ACTUALIZAR LA TABLA DE DOCUMENTOS
    bbutton.on('click',function(){ 
        getArchivos();
        var boton = document.getElementById("botonGuardar");
        boton.disabled = false;
    });
    bbutton.trigger('click');

    function getArchivos(){
        $.ajax({
            url: "../../php/admin/getArchivos.php",
            type: "POST",
            data:{
                estado: 'pendiente'
            },success:function(data){
                //Se colocan los datos en el contenedor para la tabla
                console.log(JSON.parse(data))
                $('#tablaArchivos')
                    .empty()
                    .append(createTable(JSON.parse(data)));
            },failure:function(data){
                console.err("No se pueden acutalizar los datos");
            }
        });
    
    }

    /**
     * Nombre: Juan Pablo Gallardo Ochoa
     * Descripción: Crea la tabla de los archivos.
     * Fecha: 18 de Mayo 2018
     * @param {json} json, Json que contiene datos de la tabla
     */
    function createTable(json){
        let table, th, tb;
        //Determinamos los titulos de las columnas.
        th = $('<thead>', {
            class: 'thead-dark',
            html: [
                $('<th>', {html:'ID'}),
                $('<th>', {html:'Documento'}),
                $('<th>', {html:'Usuario'}),
                $('<th>', {html:'Estado'}),
            ]
        });

        tb = $('<tbody>');
        //Ponemos cada renglon de la tabla.
        json.forEach(function(element, index){
            tb.append($('<tr>',{
                class: 'table-warning',
                html: [
                    $('<td>', {html:[
                        $("<select>", {
                            name: "id[]",
                            class: "custom-select custom-select-sm",
                            html: "<option selected>"+element.id+"</option>"
                        })
                    ]}),
                    $('<td>', {html: element.documento}),
                    $('<td>', {html: element.nombre}),
                    $('<td>', {html: [
                        $("<select>", {
                            name: "estado[]",
                            class: "custom-select custom-select-sm",
                            html: "<option selected>"+element.estado+"</option>"+
                                  "<option>Aceptado</option>"+
                                  "<option>Rechazado</option>"
                        })
                    ]}),
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
})();
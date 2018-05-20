/*
*  Nombre: Angel Hernández Rivera
*  Descripción: Archivo de js, para buscar a empleados y crear tabla.
*  Fecha: 19 de Mayo 2018
*/
(function(){
    /**
     * Nombre: Angel Hernández Rivera
     * Descripción: Función la cual realiza la petición php para traer los datos.
     * Fecha: 19 de Mayo del 2018
     * @param {String} value, valor que debe de buscar
     * @param {String} type, por que vía debe de buscarlo {id, nombre, correo}.
     */
    function getEmployees(value = null, type){
        $.ajax({
            url: "../../php/master/getEmpleado.php",
            type: "POST",
            data:{
                value: value,
                type: type
            },success:function(data){
                //Se colocan los datos en el contenedor para la tabla
                console.log(JSON.parse(data))
                $('#tablaEmpleados')
                    .empty()
                    .append(createTable(JSON.parse(data)));
            },failure:function(data){
                console.err("No se pueden acutalizar los datos");
            }
        });
    
    }

    //Buscador input, buscador tipo y buscador botón.
    let binput, btype, bbutton;

    //Almacenamos las vistas en variables.
    binput = $('#buscador-input');
    btype = $('#buscador-tipo');
    bbutton = $('#buscador-boton');

    btype.change(function(event){
        let currentValue = $(event.currentTarget).val();
        switch(currentValue){
            case "id":
                binput.attr('type', 'number');
                binput.attr('min', 1);            
                binput.attr('placeholder', "Busca por medio de id");
            break;
            case "nombre":
                binput.attr('type', 'text');
                binput.attr('placeholder', "Busca por medio de nombres");
            break;
            case "correo":
                binput.attr('type', 'email');         
                binput.attr('placeholder', "Busca por medio de un correo electrónico");
            break;
            case "contratacion":
                binput.attr('type', 'text');         
                binput.attr('placeholder', "Busca por medio de fecha de contratación");
        }
    });

    bbutton.on('click',function(){
        let value = (binput.val() == "")? null: binput.val();
        let type = btype.val(); 
        getEmployees(value, type);
    });
    bbutton.trigger('click');


    /**
     * Nombre: Angel Hernández Rivera
     * Descripción: Crea la tabla de los empleados.
     * Fecha: 19 de Mayo 2018
     * @param {json} json, Json que contiene datos de la tabla
     */
    function createTable(json){
        let table, th, tb;
        //Determinamos los titulos de las columnas.
        th = $('<thead>', {
            class: 'thead-dark',
            html: [
                $('<th>', {html:'ID'}),
                $('<th>', {html:'Nombre'}),
                $('<th>', {html:'Correo'}),
                $('<th>', {html:'Contratación'}),
            ]
        });

        tb = $('<tbody>');
        //Ponemos cada renglon de la tabla.
        json.forEach(function(element, index){
            tb.append($('<tr>',{
                html: [
                    $('<th>', {html: element.id}),
                    $('<td>', {html: element.nombre}),
                    $('<td>', {html: element.correo}),
                    $('<td>', {html: element.contratacion}),
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
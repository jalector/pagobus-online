/*
*  Nombre: Juda Alector Vallejo Herrea 
*  Descripción: Archivo de js, para buscar a usuarios y crear tabla.
*  Fecha: 12 de Mayo 2018
*/
(function(){
    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Función la cual realiza la petición php para traer los datos.
     * Fecha: 12 de Mayo del 2018
     * @param {String} value, valor que debe de buscar
     * @param {String} type, por que vía debe de buscarlo {id, nombre, correo, estado}.
     */
    function getUsers(value = null, type){
        $.ajax({
            url: "../../php/admin/getUser.php",
            type: "POST",
            data:{
                value: value,
                type: type
            },success:function(data){
                //Se colocan los datos en el contenedor para la tabla
                console.log(JSON.parse(data))
                $('#tablaUsuarios')
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
            case "estado":
                binput.attr('type', 'text');         
                binput.attr('placeholder', "Busca por medio de estado");
        }
    });

    bbutton.on('click',function(){
        let value = (binput.val() == "")? null: binput.val();
        let type = btype.val(); 
        getUsers(value, type);
    });
    bbutton.trigger('click');

    

    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Define la clase que debe llevar un renglon en la tabla de usuarios.
     * Fecha: 12 de Mayo 2018
     * @param {String} status, Recibe el estado de un usario de la tabla Estado.
     */
    function statusToColor(status){
        let answer = "";
        switch(status){
            case "pendiente":   answer = "table-warning"; break;
            case "aceptado":    answer = "table-success"; break;
            case "rechazado":   answer = "table-danger"; break;
            case "sacion_uno":  answer = "table-secondary"; break;
            case "sancion_dos": answer = "table-secondary"; break;
            case "vetado":      answer = "table-dark"; break;
            default : answer = "table-dark"; break;
        }
        return answer
    }

    /**
     * Nombre: Juda Alector Vallejo Herrera
     * Descripción: Crea la tabla de los usuarios.
     * Fecha: 12 de Mayo 2018
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
                $('<th>', {html:'Estado'}),
            ]
        });

        tb = $('<tbody>');
        //Ponemos cada renglon de la tabla.
        json.forEach(function(element, index){
            tb.append($('<tr>',{
                class:statusToColor(element.estado),
                html: [
                    $('<th>', {html: element.id}),
                    $('<td>', {html: element.nombre}),
                    $('<td>', {html: element.correo}),
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


})();
/**
 * Juda Alector Vallejo Herrera
 * Controlador para la vista de Actualizar_Datos.html de usuario.
 * 20 de mayo del 2018
 */

(function(){
    let form = $("#form-registro-usuario");  
    let id = $("#input-id");
    
    //Permite que el campo id no se modifique.
    id.on("change focus keypress", function(e){
        $(e.currentTarget).val(e.currentTarget.defaultValue);
        id.blur();
    })

    //Valida el formulariol
    form.change(function(){
        let inputs = form.find('input');
        let validInputs = 0;        
        let validForm = false;
        let formError = $("#form-error");

        //Cuento cuantos campos son validos.
        inputs.each(function(index, element){
            element = $(element);
            if(element.val() != "")validInputs++;
        })

        validForm = !(validInputs == inputs.length);

        //Damos la funcionalidad para el botón de guardar los cambios sí todos los camops están llenos.
        $("#btn-aceptar").attr("disabled", validForm);

        //Mostramos mensaje de información al usuario;
        formError[(validForm? "show": "hide")]();

    });
})();
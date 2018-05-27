
/*
    Nombre: Angel Hernández Rivera
    Descripción: Función para actualizar la foto de perfil.
    Fecha: 25 de Mayo del 2018
*/
window.URL = window.URL || window.webkitURL;
var elBrowse = document.getElementById("input-foto"),
  elPreview = document.getElementById("preview"),
  useBlob = false && window.URL; // Set to `true` to use Blob instead of Data-URL

// 2.
function readImage() {

  // Creauna nueva instancia de FileReader 
  // https://developer.mozilla.org/en/docs/Web/API/FileReader
  var reader = new FileReader();
  var file = document.getElementById('input-foto').files[0];
  reader.readAsDataURL(file);

  // Una vez ya ha sido leído:
  reader.addEventListener("load", function() {

    // En este punto `reader.result` contiene Base64 Data-URL
    // y podriamos mostrar inmediatamente la imagen usando
    // `elPreview.insertAdjacentHTML("beforeend", "<img src='"+ reader.result +"'>");`
    // Pero buscamos el ancho y el alto de la imagen en px
    // Como el archivo Objeto no contiene el tamaño de la imagen
    // Necesitamos crear una nueva imagen y asignar su src asi que
    // cuando la image este cargada podemos calcular el alto y ancho de esta
    var image = new Image();
    image.src = reader.result;
    image.addEventListener("load", function() {

      // Concatenatar nuestro HTML image info 
      // var imageInfo = file.name + ' ' + // Obtener el valor del 'name' desde el archivo obj
      //   image.width + '×' + // Obtener el ancho de nuestra imagen
      //   image.height + ' ' +
      //   file.type + ' ' +
      //   Math.round(file.size / 1024) + 'KB';

      // Finally append our created image and the HTML info string to our `#preview` 
    
     //SSS elPreview.appendChild(this);
      //elPreview.insertAdjacentHTML("beforeend", '<br>');
       $("#bar-usuario-imagen").attr('src', image.src);
       $("#lbl-profile-image").attr('src', image.src);
       $("#lbl-profile-imageE").attr('src', image.src);
    });
  });
}
function abrirSelector(){
  
$("#input-foto").trigger("click");
 
}
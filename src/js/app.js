document.addEventListener('DOMContentLoaded',function(){
    iniciarApp(); //Cuando html y css se hayan cargado llamamos a la función iniciarApp
});

function iniciarApp(){
   mostrarAlerta();
    mostrarImagen();
    
}

function mostrarAlerta(){
  const mensaje="Recurrda que si quieres poner una imagen, tienes que poner imagen_numero donde numero empieza por 0\n Recuerda que para poner espacios tiene que poner salto"
  alert(mensaje);
}
function mostrarImagen() {
    const imagesInput = document.querySelector('.numImagenes');
  
    imagesInput.addEventListener('input', function(event) {
      const num = parseInt(imagesInput.value);
      const form = document.querySelector('.Inputimagenes');
      while (form.hasChildNodes()) {
        form.removeChild(form.firstChild);
      }
    
      for (let i = 0; i < num; i++) {
        
        const input = document.createElement('input');
        input.type = 'file';
        input.accept='imges/jpg, imge/png, image/jpeg'
        input.name = 'imagen_' + i;
        input.placeholder = 'Imagen ' + i
        form.appendChild(input);
      }
    });
  }
  
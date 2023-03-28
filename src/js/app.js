document.addEventListener('DOMContentLoaded',function(){
    iniciarApp(); //Cuando html y css se hayan cargado llamamos a la función iniciarApp
});

function iniciarApp(){

    mostrarImagen();
    
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
        input.name = 'imagen_' + i;
        input.placeholder = 'Imagen ' + i
        form.appendChild(input);
      }
    });
  }
  
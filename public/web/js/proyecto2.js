console.log('Texto ingresado:');
var input = document.getElementById('myInput');
var inputDNI = document.getElementById('pruebax');
var inputNombre = document.getElementById('pruebax');
var inputValue = input.value;

var myElement = document.getElementById('my-element');
var nombres = myElement.getAttribute('dc');

inputDNI.textContent = nombres;
// console.log(nombres);

  input.addEventListener('input', function() {

    var nombre = "{{ $nombre }}";
    console.log(nombre);
    inputDNI.textContent = inputValue;
    // Realiza cualquier acción adicional que desees con el valor ingresado
  });

 

        document.getElementById('registroForm').addEventListener('submit', function(event) {
          // Validar campos de texto solo letras
          const soloLetras = /[A-Za-z\u00C0-\u017F\s]+/;
          if (!soloLetras.test(document.getElementById('nombre').value) || 
              !soloLetras.test(document.getElementById('apellidoPaterno').value) ||
              !soloLetras.test(document.getElementById('apellidoMaterno').value) ||
              (document.getElementById('ciudadNacimiento').value && !soloLetras.test(document.getElementById('ciudadNacimiento').value))) {
              alert("Los campos de nombre, apellidos y ciudad de nacimiento tienen que se llenados.");
              event.preventDefault();
          }

          // Validar edad
          const edad = document.getElementById('edad').value;
          if (isNaN(edad) || edad < 0) {
              alert("El campo de edad debe contener un número válido.");
              event.preventDe
          }
          if (isNaN(edad) || edad > 100) {
              alert("La edad no es valida");
              event.preventDefault();
          }

          // Validar número telefónico
          const telefono = document.getElementById('telefono').value;
          if (!/^\d{10}$/.test(telefono)) {
              alert("El campo de número telefónico debe contener 10 números.");
              event.preventDefault();
          }


          // Validar RFC
          const rfc = document.getElementById('rfc').value;
          if (!/^[A-Za-z]{4}\d{6}[A-Fa-f0-9]{3}$/.test(rfc)) {
              alert("El campo de RFC no cumple con el formato correcto.  \n Recordar que solo se permiten 13 caracteres");
              event.preventDefault();
          }
      });


 



   

    


window.onload = function() {
    document.getElementById("formulario").onsubmit = function() {
        // Obtiene los valores de los campos de entrada
        var documento = document.getElementById("documento").value;
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;

        // Función para validar que solo se ingresen números
        if (!validarNumeros(documento)) {
            alert("Por favor, ingrese solo números en el campo de documento.");
            return false;
        }
        
        // Verifica que el documento tenga entre 8 y 10 dígitos
        if (documento.length < 8 || documento.length > 10) {
            alert("El campo de documento debe contener entre 8 y 10 dígitos.");
            return false;
        }

        // Función para validar que solo se ingresen letras en el nombre
        if (!validarTexto(nombre)) {
            alert("Por favor, ingrese solo letras en el campo de Nombre.");
            return false;
        }
        
        // Función para validar que solo se ingresen letras en el apellido
        if (!validarTexto(apellido)) {
            alert("Por favor, ingrese solo letras en el campo de Apellido.");
            return false;
        }

        // Devuelve verdadero si todas las validaciones pasan
        return true;
    };

    // Función para validar si una cadena contiene solo números
    function validarNumeros(input) {
        var regex = /^[0-9]+$/;
        return regex.test(input);
    }

    // Función para validar si una cadena contiene solo letras y espacios
    function validarTexto(input) {
        var regex = /^[a-zA-Z\s]*$/;
        return regex.test(input);
    }
};

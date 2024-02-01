function validarFormulario() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Validar formato de correo electrónico
    if (!validarCorreo(email)) {
        alert('El formato del correo electrónico no es válido.');
        return false;
    }

    // Validar contraseña
    if (!validarContrasena(password)) {
        alert('La contraseña no cumple con los requisitos.');
        return false;
    }

    return true;
}

function validarCorreo(correo) {
    var expresionRegular = /\S+@\S+\.\S+/;
    return expresionRegular.test(correo);
}

function validarContrasena(contrasena) {
    // Verificar al menos 8 caracteres, un número y un carácter especial
    var expresionRegular = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    return expresionRegular.test(contrasena);
}

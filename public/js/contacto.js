$(document).ready(function () {
    document.getElementById('submit').click(function (event) {
        event.preventDefault()
        var nombre = document.getElementById('firstName');
        var apellidos = document.getElementById('lastName');
        var email = document.getElementById('email').nodeValue;
        var mensaje = document.getElementById('mensaje').nodeValue;
        console.log(email + mensaje);
    });
});
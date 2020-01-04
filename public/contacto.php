<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página destinada a completar los datos del usuario.">
    <meta name="author" content="Bárbara V. García, Damián E. Domínguez, David M. Ramallo">
    <title>Contacto</title>

</head>

<body>
<?php include "./header.html" ?>
<div class="container">
        <div class="my-4 text-center">
            <img class="mb-4" src="images/carrito.png" alt="" width="72" height="72">
            <h2>Contacto</h2>
            <p class="lead">¿Tienes alguna duda? Contacta con nosotros.</p>
        </div>
        <hr class="mb-4">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3">Todos los campos son necesarios.</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nombre" value=""
                                required>
                            <div class="invalid-feedback">
                                Se requiere un nombre.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Apellidos</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Apellidos" value=""
                                required>
                            <div class="invalid-feedback">
                                Se requiere un apellido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="tu@ejemplo.com" required>
                        <div class="invalid-feedback">
                            Por favor, introduzca una dirección de correo válida.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="control-label" for="comment">Mensaje</label>
                        <textarea class="form-control" rows="5"></textarea>
                        <div class="invalid-feedback">
                            Por favor, introduzca solo texto.
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-save btn-block" type="submit">Enviar</button>
                    <br>
                </form>
            </div>
        </div>
    </div>

</body>
<footer class="py-4">
    <div class="row mr-4">
        <div class="col-md-1">
        </div>
        <div class="col-md-2">
            <img id="logo" src="images/carrito.png" alt="carrito" height="30" width="30">
            <small class="d-block mb-3 text-white">&copy; 2019-2020</small>
        </div>
        <div class="col-md-3">
            <h5>Categorías</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white" href="#">Hombre</a></li>
                <li><a class="text-white" href="#">Mujer</a></li>
                <li><a class="text-white" href="#">Niños</a></li>
                <li><a class="text-white" href="#">TOP Ventas</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>Contacto</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white" href="contacto.html">Contacto</a></li>
                <li><a class="text-white" href="devoluciones.html">Devoluciones</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>Quiénes somos</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white" href="equipo.html">Equipo</a></li>
                <li><a class="text-white" href="privacidad.html">Privacidad</a></li>
                <li><a class="text-white" href="condicionesCompra.html">Condiciones de compra</a></li>
            </ul>
        </div>
    </div>
</footer>

</html>
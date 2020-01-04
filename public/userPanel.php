<!doctype html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página destinada a completar los datos del usuario.">
    <meta name="author" content="Bárbara V. García, Damián E. Domínguez, David M. Ramallo">
    <title>Panel de Usuario</title>
</head>

<body>
<?php include "./header.html" ?>
    <div class="container">
        <div class="py-5 text-center">
            <img class="mb-4" src="images/carrito.png" alt="" width="72" height="72">
            <h2>Regístrate y disfruta de las ventajas que te ofrecemos.</h2>
            <p class="lead">Es gratis.</p>
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

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="passwd">Contraseña</label>
                            <input type="password" class="form-control" id="passwd" placeholder="Contraseña" required>
                            <div class="invalid-feedback">
                                Por favor, introduzca una contraseña.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="passwd">Repita la contraseña</label>
                            <input type="password" class="form-control" id="rep_passwd" placeholder="Contraseña"
                                required>
                            <div class="invalid-feedback">
                                Por favor, introduzca una contraseña.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-3 mb-3">
                            <label for="street">Tipo de vía</label>
                            <select class="custom-select d-block w-100 " id="street" required>
                                <option value="">Elige...</option>
                                <option>Calle</option>
                                <option>Avenida</option>
                                <option>Camino</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, introduzca el tipo de vía.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-9 mb-3">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" id="address" placeholder="" required>
                            <div class="invalid-feedback">
                                Por favor, introduzca su direccion de envio.
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-4 mb-2 ">
                            <label for="number ">Número</label>
                            <input type="text " class="form-control " id="number " placeholder=" ">
                        </div>
                        <div class="col-md-1 col-sm-4 mb-2 ">
                            <label for="floor ">Piso</label>
                            <input type="text " class="form-control " id="floor " placeholder=" ">
                        </div>
                        <div class="col-md-1 col-sm-4 mb-2 ">
                            <label for="letter ">Letra</label>
                            <input type="text " class="form-control " id="letter " placeholder=" ">
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-5 col-sm-4 mb-3">
                            <label for="country ">Provincia</label>
                            <select class="custom-select d-block w-100 " id="country " required>
                                <option value="">Elige...</option>
                                <option>Álava</option>
                                <option>Albacete</option>
                                <option>Alicante</option>
                                <option>Almería</option>
                                <option>Asturias</option>
                                <option>Ávila</option>
                                <option>Las Palmas</option>
                                <option>Tenerife</option>
                                <!--Hay que cambiar los nombres-->
                            </select>
                            <div class="invalid-feedback ">
                                Por favor, seleccione una provincia válida.
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 mb-3 ">
                            <label for="state ">Localidad</label>
                            <select class="custom-select d-block w-100 " id="state " required>
                                <option value="">Elige...</option>
                                <!-- Si se selecciona una provincia, 
                                    deberían aparecer sus respectivas comunidades autónomas 
                                    y eso no sé si se podría hacer fácilmente -->
                            </select>
                            <div class="invalid-feedback ">
                                Por favor, seleccione una comunidad autónoma válida.
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 mb-3 ">
                            <label for="zip ">Código Postal</label>
                            <input type="text " class="form-control " id="zip " placeholder="38001" required>
                            <div class="invalid-feedback ">
                                Se requiere el código postal.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4 ">

                    <h4 class="mb-3 ">Método de pago</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                            <!--Deberia cambiar los demas campos, creo-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Titular de la tarjeta</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Nombre completo que aparece en la tarjeta</small>
                            <div class="invalid-feedback">
                                El nombre del titular es necesario.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número de tarjeta</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="1234 5678 9876 5432"
                                required>
                            <div class="invalid-feedback ">
                                El número de la tarjeta es necesario.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3 ">
                            <label for="cc-expiration">Fecha de caducidad</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="05/23" required>
                            <div class="invalid-feedback ">
                                La fecha de caducidad es necesario.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3 ">
                            <label for="cc-cvv ">CVV</label>
                            <input type="text " class="form-control" id="cc-cvv" placeholder="000" required>
                            <div class="invalid-feedback ">
                                El CVV es necesario.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-lg btn-save btn-block" type="submit">Guardar</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js "
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n "
        crossorigin="anonymous "></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js "><\/script>')
    </script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm "
        crossorigin="anonymous "></script>
    <script src="js/form-validation.js "></script>
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
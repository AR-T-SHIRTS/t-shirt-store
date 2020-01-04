<!doctype html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Página destinada para obtener el email y la contraseña para el registro del usuario">
    <meta name="author" content="Bárbara V. García, Damián E. Domínguez, David M. Ramallo">
    <title>Registro</title>

</head>

<body>
<?php include "./header.html" ?>
    <div class="cn">
        <div class="text-center my-5 form-signin">
            <img class="mb-4" src="images/carrito.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Crea tu cuenta</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            <!--<label class="sr-only">Repetir contraseña</label>
            <input type="password"class="form-control" placeholder="Repetir Contraseña" required>-->

            <button onclick="register()" id="btnSignUp" class="btn btn-lg btn-registro btn-block"
                type="submit">Registrarse</button>
            <br>
            <p>¿Ya tienes una cuenta? <a id="noregistro" href="login.html">Inicia sesión</a></p>
        </div>
    </div>

    <!-- FIREBASE -->

    <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->

    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
    <!-- <script src="/__/firebase/7.5.2/firebase-analytics.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>

    <!-- Initialize Firebase -->
    <script>
        //Inicializar Firebase
        var firebaseConfig = {
            apiKey: "AIzaSyADN2WrTeyMRGzNfZX5RjCZTuwaaGAoWd8",
            authDomain: "ar-store-9b1bd.firebaseapp.com",
            databaseURL: "https://ar-store-9b1bd.firebaseio.com",
            projectId: "ar-store-9b1bd",
            storageBucket: "ar-store-9b1bd.appspot.com",
            messagingSenderId: "164551784368",
            appId: "1:164551784368:web:4d93fa972aaf3d1bd54875",
            measurementId: "G-3LR9106SGK"
        };

        firebase.initializeApp(firebaseConfig);
    </script>
    <!-- <script src="/__/firebase/init.js"></script> -->

    <script src="js/login_and_register.js"></script>
    <!-- /FIREBASE -->


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
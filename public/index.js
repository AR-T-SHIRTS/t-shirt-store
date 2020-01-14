$(document).ready(function() {
    $(".site-header").html('<nav class="navbar navbar-expand-md site-header sticky-top py-1 nav-tabs navbar-dark"> <a class="navbar-brand py-2" href="index.html" aria-label="Product"><img id="logo" src="images/carrito.png" alt="carrito" height="40" width="40"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbars"> <ul class="navbar-nav mr-auto "> <li class="nav-item"> <a class="nav-link py-2 text-white" href="index.html">Inicio<span class="sr-only">(current)</span></a> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorías</a> <div class="dropdown-menu"> <a class="dropdown-item" href="categoriaHombre.html">Hombre</a> <a class="dropdown-item" href="categoriaMujer.html">Mujer</a> <a class="dropdown-item" href="categoriaNino.html">Niños</a> </div> </li> <li class="nav-item"> <a class="nav-link py-2 text-white" href="topventas.html">TOP Ventas</a> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accesos</a> <div class="dropdown-menu"> <a class="dropdown-item logueado" href="login.html">Iniciar sesión</a> <a class="dropdown-item logueado" href="register.html">Registrarse</a> <a class="dropdown-item" href="userPanel.html">Panel de usuario</a> <button id="logOutButton" class="dropdown-item">Cerrar sesión</button> </div> </li> </ul> </div> </nav>');
    $(".site-footer").html('<div class="row mr-4"> <div class="col-md-1"> </div> <div class="col-md-2"> <img id="logo" src="images/carrito.png" alt="carrito" height="30" width="30"> <small class="d-block mb-3 text-white">&copy; 2019-2020</small> </div> <div class="col-md-3"> <h5>Categorías</h5> <ul class="list-unstyled text-small"> <li><a class="text-white" href="categoriaHombre.html">Hombre</a></li> <li><a class="text-white" href="categoriaMujer.html">Mujer</a></li> <li><a class="text-white" href="categoriaNino.html">Niños</a></li> <li><a class="text-white" href="topventas.html">TOP Ventas</a></li> </ul> </div> <div class="col-md-3"> <h5>Contacto</h5> <ul class="list-unstyled text-small"> <li><a class="text-white" href="contacto.html">Contacto</a></li> <li><a class="text-white" href="devoluciones.html">Devoluciones</a></li> </ul> </div> <div class="col-md-3"> <h5>Quiénes somos</h5> <ul class="list-unstyled text-small"> <li><a class="text-white" href="equipo.html">Equipo</a></li> <li><a class="text-white" href="privacidad.html">Privacidad</a></li> <li><a class="text-white" href="condicionesCompra.html">Condiciones de compra</a></li> </ul> </div> </div>');
});
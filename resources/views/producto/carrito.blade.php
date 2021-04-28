<!DOCTYPE html>
<html>
<head>
    <title>Shoe'store | Bienvenido </title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,  initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/carrito.css">
</head>
<body>
<header>
    <div id="titulo" class="jumbotron jumbotron-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <h1 id="titulo_palabra" class="display-4">SHOE'STORE</h1>
            </div>
            <div class="col-lg-4 text-center" >
                <img src="../assets/img/Logo.jpg" width="90" height="80">
            </div>
        </div>
    </div>
</header>
<section>
    <!--MENU-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/Logo.jpg" alt="Shoe'store" width="50" height="50">
        </a>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/mujeres')}}">Mujere</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/hombres')}}">Hombre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Novedades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/registro')}}">
                    <button type="button" class="btn btn-info">Registrar</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">
                    <button type="button" class="btn btn-success">Iniciar Sesion</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <button type="button" class="btn btn-danger">Salir</button>
                </a>
            </li>
        </ul>
    </nav>
    <!--ENCABEZADO-->
    <div class="container-fluid">
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Carrito de Compras</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <!--CONTENIDO-->
        <div  class="row align-items-center justify-content-center">
            <div id="imagen_prodcuto" class="col-lg-3">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3"
                         width="200" height="200">
                </a>
            </div>
            <div id="peque_descripccion_producuto" class="log-lg-3 text-center">
                <h5 class="titulo_producto">Tennis Adidas</h5>
                <p>Copa mundial</p>
                <p>Talla : 21</p>
            </div>
            <div id="cantidad_producto" class="col-lg-3 text-center">
                <form class="form-inline" action="#">
                    <div class="form-group">
                        <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                        <input type="number" class="form-control" min="1" max="10">
                    </div>
                </form>
            </div>
            <div id="precio_producto" class="col-lg-3">
                <p class="precio_producto">TOTAL $300.00 pesos</p>
            </div>
        </div>
        <div  class="row align-items-center justify-content-center">
            <div id="imagen_prodcuto" class="col-lg-3">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3"
                         width="200" height="200">
                </a>
            </div>
            <div id="peque_descripccion_producuto" class="log-lg-3 text-center">
                <h5 class="titulo_producto">Tennis Adidas</h5>
                <p>Copa mundial</p>
                <p>Talla : 21</p>
            </div>
            <div id="cantidad_producto" class="col-lg-3 text-center">
                <form class="form-inline" action="#">
                    <div class="form-group">
                        <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                        <input type="number" class="form-control" min="1" max="10">
                    </div>
                </form>
            </div>
            <div id="precio_producto" class="col-lg-3">
                <p class="precio_producto">TOTAL $300.00 pesos</p>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <p>Desarrollado por Bryan Reyes y Alberto Ruelas <?=date('Y')?></p>
</footer>
</body>
</html>

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
    <div class="container-fluid">
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Producto</h1>
            </div>
        </div>
        <div  class="row">
            <div id="imagen_prodcuto" class="col-lg-8">
                <a href="producto ">
                        <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3" width="600" height="600">
                </a>
            </div>
            <div  id="producto_descripccion" class="col-lg-4 shadow-lg p-4 mb-4 bg-white">
                <div>
                    <h1 class="display-4">Predator 3421</h1>
                    <br>
                    <h2>Adidas</h2>
                    <br>
                    <p class="text-left">Con una parte superior estratégicamente texturizada que ayuda con el agarre y el contacto,
                        el Nike Phantom GT Club Dynamic Fit TF está diseñado para los ataques precisos</p>
                    <br>
                    <p class="font-weight-bold"> $ 1500 mxn</p>
                </div>
                <form action="" method="">
                    <div class="form-group">
                        <label for="seleccion">Tallas disponibles :</label>
                        <select class="form-control" id="seleccion">
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                        </select>
                        <br>
                        <input type="submit"  class="btn btn-primary" value="Comprar">
                        <br>
                        <br>
                        <input type="submit"  class="btn btn-warning" value="Agregar Carrito">
                    </div>
                </form>
                <div>
                    <button class="btn btn-danger">Regresar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">
                Copyright &copy; Your Website
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

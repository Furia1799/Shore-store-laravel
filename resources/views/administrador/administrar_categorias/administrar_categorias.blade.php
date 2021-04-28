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
    <link rel="stylesheet" href="../assets/css/producto.css">
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
    <!--TITLE-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Administrar Categorias</h1>
            </div>
        </div>
    </div>
    <!--CONTENIDO-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('/administracion/categorias/agregar')}}">
                    <button type="button" class="btn btn-primary">Agregar</button>
                </a>
                <br>
            </div>
            <div class="col-lg-12">
                <div id="tabla_productos" class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Categoria</th>
                            <th>nombre</th>
                            <th>Descripccion</th>
                            <th>precio</th>
                            <th>stock</th>
                            <th>Fecha</th>
                            <th>Imagen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
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


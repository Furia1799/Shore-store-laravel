<!--NAVBAR-->
<link rel="stylesheet" href="../assets/css/navbar.css">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top ">
    <a class="navbar-brand" href="#">
        <img src="../assets/img/Logo.jpg" alt="Shoe'store" width="50" height="50">
    </a>
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="/categories">Categorias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/brands">Marcas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ordes">Ordenes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/products">Productos</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        @if($usuario = Auth::user())
            <p id="bienvenido">Administrador {{$usuario->name}}</p>
        @endif
        <li class="nav-item">
            <a class="nav-link">
                <a  href="/logout" type="button" class="btn btn-danger">Cerrar Sesion</a>
            </a>
        </li>
    </ul>
</nav>

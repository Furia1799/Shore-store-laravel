<!--NAVBAR-->
<link rel="stylesheet" href="../assets/css/navbar.css">

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
        @guest()
        <li class="nav-item">
            <a id="btnRegistrar" class="nav-link btn btn-primary" href="">Registrar</a>
        </li>
        <li class="nav-item">
            <a id="btnIniciarSesion" class="nav-link btn btn-success" href="{{url('/login')}}">Iniciar Sesion</a>
        </li>
        @endguest
        @auth
        <li class="nav-item">
            <a id="btnSalir" class="nav-link btn btn-danger" href="{{url('/logout')}}">Cerrar Sesion</a>
        </li>
            @endauth
    </ul>

</nav>

@include('cliente.users.modal_create')

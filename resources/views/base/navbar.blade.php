<!--NAVBAR-->
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

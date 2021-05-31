<!DOCTYPE html>
<html>
<!--HEAD-->
@include('base.head')
<body>
<!--HEADER-->
@include('base.header')
<section>
    <!--NAVBAR-->
@include('administrador.base.navbar')
<!--CONTENIDO-->
    <div class="container-fluid">
        @yield('contenido_administrador')
    </div>
</section>
<!--FOOTER-->
@include('base.footer')
</body>
</html>

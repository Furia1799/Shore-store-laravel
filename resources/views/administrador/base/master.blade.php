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
    @yield('contenido_administrador')
</section>
<!--FOOTER-->
@include('base.footer')
</body>
</html>

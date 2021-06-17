<!DOCTYPE html>
<html>
<!--HEAD-->
@include('base.head')
<body>
<!--HEADER-->
@include('base.header')
<section>
    <!--NAVBAR-->
@include('base.navbar')
<!--CONTENIDO-->
    @yield('contenido_user')
</section>
<!--FOOTER-->
@include('base.footer')
</body>
</html>

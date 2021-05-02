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
    <div class="container-fluid">
        @yield('contenido')
    </div>
</section>
<!--FOOTER-->
@include('base.footer')
</body>
</html>


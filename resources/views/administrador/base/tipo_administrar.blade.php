@extends('administrador.base.master')

@section('title', 'tipo_administrar')

@section('contenido_administrador')
    <div class="container-fluid">
        <!--CONTENIDO-->
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">ADMINISTRAR</h1>
            </div>
        </div>
        <div  class="row">
            <div id="imagen_prodcuto" class="col-lg-4">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3" width="300" height="300">
                    <h2 class="titulo_producto">CATEGORIAS</h2>
                </a>
            </div>
            <div  id="imagen_prodcuto" class="col-lg-4">
                <a href="producto">
                    <img class="imagen_producto" src="../assets/img/tennis_2.jpg" class="rounded" alt="tennis_2" width="300" height="300">
                    <h2 class="titulo_producto" >DIRECCIONES</h2>
                </a>
            </div>
            <div  id="imagen_prodcuto" class="col-lg-4">
                <a href="producto">
                    <img class="imagen_producto" src="../assets/img/tennis_3.jpg" class="rounded" alt="tennis_1" width="300" height="300">
                    <h2 class="titulo_producto" >MARCAS</h2>
                </a>
            </div>
        </div>
        <div  class="row">
            <div id="imagen_prodcuto" class="col-lg-4">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3" width="300" height="300">
                    <h2 class="titulo_producto">ORDENES</h2>
                </a>
            </div>
            <div  id="imagen_prodcuto" class="col-lg-4">
                <a href="{{url('/products')}}">
                    <img class="imagen_producto" src="../assets/img/tennis_2.jpg" class="rounded" alt="tennis_2" width="300" height="300">
                    <h2 class="titulo_producto" >PRODUCTOS</h2>
                </a>
            </div>
            <div  id="imagen_prodcuto" class="col-lg-4">
                <a href="producto">
                    <img class="imagen_producto" src="../assets/img/tennis_3.jpg" class="rounded" alt="tennis_1" width="300" height="300">
                    <h2 class="titulo_producto" >OTROS</h2>
                </a>
            </div>
        </div>
    </div>
@endsection

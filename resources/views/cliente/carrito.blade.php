@extends('base.master')

@section('title', 'carrito')

@section('contenido')
    <link rel="stylesheet" href="../assets/css/carrito.css">
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Carrito de Compras</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <!--CONTENIDO-->
        <div  class="row align-items-center justify-content-center">
            <div id="imagen_prodcuto" class="col-lg-3">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3"
                         width="200" height="200">
                </a>
            </div>
            <div id="peque_descripccion_producuto" class="log-lg-3 text-center">
                <h5 class="titulo_producto">Tennis Adidas</h5>
                <p>Copa mundial</p>
                <p>Talla : 21</p>
            </div>
            <div id="cantidad_producto" class="col-lg-3 text-center">
                <form class="form-inline" action="#">
                    <div class="form-group">
                        <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                        <input type="number" class="form-control" min="1" max="10">
                    </div>
                </form>
            </div>
            <div id="precio_producto" class="col-lg-3">
                <p class="precio_producto">TOTAL $300.00 pesos</p>
            </div>
        </div>
        <div  class="row align-items-center justify-content-center">
            <div id="imagen_prodcuto" class="col-lg-3">
                <a href="producto ">
                    <img class="imagen_producto" src="../assets/img/tennis_1.jpg" class="rounded" alt="tennis_3"
                         width="200" height="200">
                </a>
            </div>
            <div id="peque_descripccion_producuto" class="log-lg-3 text-center">
                <h5 class="titulo_producto">Tennis Adidas</h5>
                <p>Copa mundial</p>
                <p>Talla : 21</p>
            </div>
            <div id="cantidad_producto" class="col-lg-3 text-center">
                <form class="form-inline" action="#">
                    <div class="form-group">
                        <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                        <input type="number" class="form-control" min="1" max="10">
                    </div>
                </form>
            </div>
            <div id="precio_producto" class="col-lg-3">
                <p class="precio_producto">TOTAL $300.00 pesos</p>
            </div>
        </div>
@endsection

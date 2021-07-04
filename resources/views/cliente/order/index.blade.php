@extends('base.master')

@section('title', 'cliente_order')

@section('contenido')
    <link rel="stylesheet" href="/assets/css/carrito.css">
    <div  class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Pedido</h1>
        </div>
    </div>


    <style>
        aside{
            width: 30%;
            float: right;
        }
    </style>


    <div class="container">
        <!--CONTENIDO-->
        @if($message = Session::get('estado'))
            @if($message == 'agregado')
                <div class="alert alert-success">
                    <strong>{{ $message }}!</strong>
                </div>
            @endif
        @endif
            @isset($product_number,$shipping_price,$total_price)
                <aside>
                    <div class="row">
                        <div class="col-lg-12 shadow-lg p-4 mb-4 bg-white float-right">
                            <div class="card mb-3" style="max-width: 100%;">
                                <div class="card-body ">
                                    <h4 class="card-Title text-center">Resumen del Pedido</h4>
                                    <br>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <p class="card-text float-left">{{$product_number}} Productos </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="card-text float-rigth">${{$total_price}}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <p class="card-text float-left">Entrega </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="card-text float-rigth">Gratis</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-6">
                                            <p class="card-text float-left">Total</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="card-text float-rigth">${{$total_price}}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a id="btnComprar" href="/carts/" class="btn btn-primary">Ir a Pagar </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            @endisset
            <div  class="row ">
                <div class="col-lg-12 shadow-lg p-4 mb-4 bg-white">
                    <p>Direcciones </p>
                </div>
            </div>
    </div>
@endsection

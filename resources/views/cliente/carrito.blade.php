@extends('base.master')

@section('title', 'carrito')

@section('contenido')
   <link rel="stylesheet" href="/assets/css/carrito.css">
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Tu Carrito</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <!--CONTENIDO-->
        <div  class="row justify-content-between">
            <div class="col-lg-7 shadow-lg p-4 mb-4 bg-white float-left">
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/img/tennis_1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h5 class="card-title">Tennis Adidas</h5>
                                        <p class="card-text">Copa mundial</p>
                                        <p class="card-text">Talla : 21</p>
                                        <form class="form-inline card-text" action="#">
                                            <div class="form-group">
                                                <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                                                <input type="number" class="form-control" min="1" max="10">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 align-self-center">
                                        <p class="card-text">$300.00 MXN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="row justify-content-between">
                <div class="col-lg-7 shadow-lg p-4 mb-4 bg-white float-left">
                    <div class="card mb-3" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/img/tennis_1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <h5 class="card-title">Tennis Adidas</h5>
                                            <p class="card-text">Copa mundial</p>
                                            <p class="card-text">Talla : 21</p>
                                            <form class="form-inline card-text" action="#">
                                                <div class="form-group">
                                                    <label for="cantidad" class="mr-sm-3">Cantidad: </label>
                                                    <input type="number" class="form-control" min="1" max="10">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 align-self-center">
                                            <p class="card-text">$300.00 MXN</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-4 shadow-lg p-4 mb-4 bg-white float-right">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="card-body ">
                        <h4 class="card-Title text-center">Resumen del Pedido</h4>
                        <br>
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <p class="card-text float-left">2 Productos </p>
                            </div>
                            <div class="col-lg-4">
                                <p class="card-text float-rigth">$5200.00</p>
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
                                <p class="card-text float-rigth">$5200.00</p>
                            </div>
                        </div>
                        <br>
                                <a id="btnComprar" href="" class="btn btn-primary">Ir a Pagar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

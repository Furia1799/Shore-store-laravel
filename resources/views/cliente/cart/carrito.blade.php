@extends('base.master')

@section('title', 'carrito')

@section('contenido')
   <link rel="stylesheet" href="/assets/css/carrito.css">
        <div  class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Tu Carrito</h1>
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
    @isset($cart)
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
                                <a id="btnComprar" href="" class="btn btn-primary">Ir a Pagar </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        @endisset
            <div  class="row ">
            @foreach($cart->products as $product)
                    <div class="col-lg-11 shadow-lg p-4 mb-4 bg-white float-left">
                        <div class="card mb-3" style="max-width: 800px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{$product->image}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <h5 class="card-title">{{$product->name}}</h5>
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
                                                <p class="card-text">${{$product->price}} MXN</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>

        @endisset
    </div>
@endsection

@extends('base.master')

@section('title', 'order_pay')

@section('contenido')
    <link rel="stylesheet" href="/assets/css/carrito.css">
    <div  class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Forma de pago</h1>
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
            @isset($product_number,$shipping_price,$total_price,$directions,$user)
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
                                        <div class="col-lg-4">
                                            <p class="card-text float-left">Total</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="card-text float-rigth">${{$total_price}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            @endisset
        <div  class="row ">
            <div class="col-lg-11 shadow-lg p-4 mb-4 bg-white">

                <form id="formulario" name="formulario" action="/ordersCostumer" method="POST" > <!--Enviar a controlador -->
                    @csrf <!--Evitar inyecciones sql-->
                    <input type="hidden" name="user_id" id="" value="{{$user->id}}">
                    <input type="hidden" name="cost" id="" value="{{$total_price}}">

                    <h1 class="text-center">Seleccione Informacion de Envio</h1>
                    <br>
                        <div class="form-group">
                            <label for="brand">Direccion de envio:</label>
                            <select class="form-control" name="direction_id" id="brand" required>
                                <option value="">Seleccione una Direccion</option>
                                 @foreach($directions as $direction)
                                    <option value="{{$direction->id}}">{{$direction->address}}</option>
                                @endforeach
                            </select>
                        </div>
                    <a class="btn btn-primary" href="/directions">Agregar Direccion</a>
                    <br>
                    <h1 class="text-center">Metodo de Pago</h1>
                    <br>
                    <div class="form-group">
                        <label for="brand">Numero de Tarjeta :</label>
                        <input  type="text" class="form-control col-lg-8" name="" id="" placeholder="Numero Tarjeta"
                               required minlength="16" maxlength="16" pattern="[0-9 ]{16}">
                    </div>
                    <div class="form-group">
                        <label for="brand">Nombre del Titular :</label>
                        <input type="text" class="form-control col-lg-8" name="" id="" placeholder="Nombre Titular"
                               required minlength="3" maxlength="40" pattern="[A-Z a-z ]{3,40}">
                    </div>
                    <div class="form-group ">
                        <label for="brand">Fecha de Caducidad de la Tarjeta :</label>
                        <input type="text" class="form-control col-lg-8" name="" id="" placeholder="MM / AA"
                               required  >
                    </div>
                    <div class="form-group ">
                        <label for="brand">CVV :</label>
                        <input type="text"class="form-control col-lg-8" name="" id=""
                               required minlength="3" maxlength="3" pattern="[0-9]{3}">
                    </div>
                    <input class="btn btn-dark " type="submit" value="Hacer Pedido" >
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('base.master')

@section('title','novedades')

@section('contenido')
    <link rel="stylesheet" href="../assets/css/productos.css">
    <!--CONTENIDO-->
    <div  class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Productos para Novedades</h1>
        </div>
    </div>

    @include('cliente.users.modal_create')

    @isset($products)
        <div  class="container">
            <div id="album" class="row row-cols-3 g-3" >
                {{--@dd($products) --}}
                @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <a id="" href="/product/{{$product->id}}">
                            <div  class="card-deck">
                                <div id="tarjeta" class="card text-center bg-light border-light">
                                    <img id="imagen_tarjeta" class="card-img-top" src="{{$product->image}}"   alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <p class="blockquote-footer">{{$product->brand->name}}</p>
                                        <p class="card-text">$ {{$product->price}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
                @endforeach
            </div>
        </div>
    @endisset
@endsection


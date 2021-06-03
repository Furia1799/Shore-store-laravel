@extends('administrador.base.master')

@section('title', 'producto_mostrar')

@section('contenido_administrador')
    <link rel="stylesheet" href="../assets/css/tabla.css">

    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar Productos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Button to Open the Modal -->
                <button id="boton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                    AGREGAR
                </button>
            </div>
        </div>
        <br>
        <!-- The Modal  AGREGAR-->
        @include('administrador.products.modal_create')
        <!-- The Modal  EDITABLE-->
        @include('administrador.products.modal_edit')
        <!-- The Modal  EDITABLE-->
        @include('administrador.products.modal_delete')

        @if($message = Session::get('estado'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @isset($products)
        <!--Table-->
        <div class="row">
            <div class="col-lg-12">
                <div id="tabla_productos" class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Categoria</th>
                                <th>nombre</th>
                                <th>Descripccion</th>
                                <th>precio</th>
                                <th>stock</th>
                                <th>Imagen</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->id_brand}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->stock}}</td>
                                <td><img src="{{$product->descripcion}}"
                                         height="75" width="75" alt="">
                                </td>
                                <td>
                                    <a href="/products/{{$product->id}}/edit">
                                        <button type="button" class="btn btn-warning">
                                            <i id="pencil" class="bi bi-pencil-fill"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/products/{{$product->id}}">
                                        <button class="btn btn-danger">
                                            <i id="tacha"class="bi bi-x"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
        @endisset
    </div>

@endsection

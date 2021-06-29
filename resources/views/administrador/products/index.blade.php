@extends('administrador.base.master')

@section('title', 'producto_mostrar')

@section('contenido_administrador')
    <link rel="stylesheet" href="../assets/css/tabla.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar Productos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Button to Open the Modal -->
                <a href="/products/create">
                    <button id="boton" type="button" class="btn btn-primary">
                        AGREGAR
                    </button>
                </a>
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
            @if($message == 'Creado')
                <div class="alert alert-success">
                    <strong>{{ $message }}!</strong>
                </div>
            @endif
            @if($message == 'Actualizado')
                <div class="alert alert-primary">
                    <strong>{{ $message }}!</strong>
                </div>
            @endif
            @if($message == 'Eliminado')
                <div class="alert alert-danger">
                    <strong>{{ $message }}!</strong>
                </div>
            @endif
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error de Formulario</strong>
                <p>Corrige los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @isset($products)
        <!--Table-->
        <div class="row">
            <div class="col-lg-12">
                <div id="tabla_productos" class="table-responsive-sm">
                    <table class="table table-striped" id="tablaProductos">

                    </table>
                </div>
                <br>
            </div>
        </div>
        @endisset
    </div>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaProductos').DataTable( {
                "ajax": '/products',
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                columns: [
                    { title: "Id", data: "id"},
                    { title: "Nombre" ,data: "name" },
                    { title: "Descripccion", data: "description" },
                    { title: "Marca",data: "brand.name" },
                    { title: "Categoria",data: "brand.name" },
                    { title: "Precio", data: "price" },
                    { title: "Stock" , data: "stock" },
                    { title: "Imagen", data: "image" , width: '100px', orderable: false, searchable: false },
                    { title: "Editar", data: "editar", orderable: false, searchable: false},
                    { title: "Eliminar", data: "eliminar", orderable: false, searchable: false},

                ]

            } );
        } );
    </script>

@endsection

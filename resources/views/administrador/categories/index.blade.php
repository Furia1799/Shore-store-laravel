@extends('administrador.base.master')

@section('title', 'categories_mostrar')

@section('contenido_administrador')
    <link rel="stylesheet" href="../assets/css/tabla.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar Categorias</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Button to Open the Modal -->
                <a href="/categories/create">
                    <button id="boton" type="button" class="btn btn-primary">
                        AGREGAR
                    </button>
                </a>
            </div>
        </div>
        <br>
        <!-- The Modal  AGREGAR-->
    @include('administrador.categories.modal_create')
    <!-- The Modal  EDITABLE-->
    @include('administrador.categories.modal_edit')
    <!-- The Modal  EDITABLE-->
        @include('administrador.categories.modal_delete')

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

        @isset($categories)
        <!--Table-->
            <div class="row">
                <div class="col-lg-12">
                    <div id="tabla_marcas" class="table-responsive-sm">
                        <table class="table table-striped" id="tablaCategorias"></table>
                    </div>
                    <br>
                </div>
            </div>
        @endisset
    </div>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaCategorias').DataTable( {
                "ajax": '/categories',
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                columns: [
                    { title: "Id", data: "id"},
                    { title: "Nombre" ,data: "name"},
                    { title: "Editar", data: "editar", width:'70px', orderable: false, searchable: false},
                    { title: "Eliminar", data: "eliminar", width:'70px', orderable: false, searchable: false},
                ]
            } );
        } );
    </script>

@endsection

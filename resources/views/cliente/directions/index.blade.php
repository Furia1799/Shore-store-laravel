@extends('cliente.base.master')

@section('title', 'direction_index')

@section('contenido_user')

    <link rel="stylesheet" href="../assets/css/tabla.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar mis Direcciones</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Button to Open the Modal -->
                <a href="/directions/create">
                    <button id="boton" type="button" class="btn btn-primary">
                        AGREGAR
                    </button>
                </a>
            </div>
        </div>
        <br>
        <!-- The Modal  AGREGAR-->
        @include('cliente.directions.modal_create')
    <!-- The Modal  EDITABLE-->
        @include('cliente.directions.modal_edit')
    <!-- The Modal  EDITABLE-->
        @include('cliente.directions.modal_delete')

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

        @isset($directions)
        <!--Table -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="tabla_productos" class="table-responsive-sm">
                        <table class="table table-striped" id="tablaDirections">

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
            $('#tablaDirections').DataTable( {
                "ajax": '/directions',
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                columns: [
                    { title: "Id", data: "id"},
                    { title: "user_id" ,data: "user_id" },
                    { title: "Pais", data: "country" },
                    { title: "Estado",data: "provincia" },
                    { title: "Cuidad",data: "city" }, /*"categories[0].name"*/
                    { title: "Direccion", data: "address" },
                    { title: "Editar", data: "editar", orderable: false, searchable: false},
                    { title: "Eliminar", data: "eliminar", orderable: false, searchable: false},
                ]
            } );
        } );
    </script>

@endsection

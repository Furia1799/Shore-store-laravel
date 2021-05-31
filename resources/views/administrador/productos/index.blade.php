@extends('administrador.base.master')

@section('title', 'producto_mostrar')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar Productos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="index.php">
                <button type="button" class="btn btn-primary">Agregar</button>
            </a>
            <br>
        </div>
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
                        <th>Fecha</th>
                        <th>Imagen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Doe</td>
                        <td>Doe</td>
                        <td>Doe</td>
                        <td>Doe</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
@endsection

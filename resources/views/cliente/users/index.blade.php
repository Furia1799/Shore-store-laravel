@extends('cliente.base.master')

@section('title', 'user_index')

@section('contenido_user')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="productos_titulo" class="display-4 text-center">Administrar mis datos</h1>
            </div>
        </div>
    </div>

    @include('cliente.users.modal_edit')
    @include('cliente.users.modal_delete')

    <div class="container">
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
        @endif

        <div class="row">
            <div class="col-lg-8">
                @if($user = Session::get('user'))
                    <form id="formulario"  > <!--Enviar a controlador -->
                    @csrf <!--Evitar inyecciones sql-->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre : </label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{$user->name}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Apellido : </label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                       value="{{$user->last_name}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email : </label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="{{$user->email}}" readonly>
                            </div>
                            <div class="form-grup">
                                <label for="password">Contrasena : </label>
                                <input type="password" class="form-control" name="password" id="password"
                                       value="{{$user->password}}" readonly>
                            </div>
                            <br>
                            <div class="form-grup">
                                <a href="/users/{{$user->id}}/edit">
                                    <button type="button" class="btn btn-dark">Editar</button>
                                </a>
                            <!--<a href="/users/{{$user->id}}">
                            <button type="button" class="btn btn-danger">Eliminar Cuenta</button>
                        </a>-->
                            </div>
                        </div>
                    </form>
            </div>
            <div class="col-lg-4">
                <h3>Mis Datos</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item ">Mi cuenta</a>
                    <a href="#" class="list-group-item ">Direcciones</a>
                    <a href="#" class="list-group-item ">Historia de Pedidos</a>
                    <a href="#" class="list-group-item ">Otros</a>
                </div>
            </div>
        </div>
        <br>
    </div>

    @endif
@endsection

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
    <div class="container">
        @if($message = Session::get('estado'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($user = Session::get('user'))
            <form id="formulario" action="" method="POST" > <!--Enviar a controlador -->
            @csrf <!--Evitar inyecciones sql-->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre : </label>
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{$user->name}}" maxlength="25" minlength="3" pattern="[A-Z a-z]+"
                               title="Solo letras del alfabeto" required >
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido : </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                               value="{{$user->last_name}}" maxlength="25" minlength="5" pattern="[A-Z a-z]+"
                               title="Solo letras del alfabeto" required >
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" name="email" id="email"
                               value="{{$user->email}}" maxlength="25" minlength="5" required >
                    </div>
                    <div class="form-grup">
                        <label for="password">Contrasena : </label>
                        <input type="password" class="form-control" name="password" id="password"
                               value="{{$user->password}}" maxlength="25" minlength="5" required >
                    </div>
                    <br>
                </div>
            </form>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalUpdate">
            Editar
        </button>

    </div>
    @include('cliente.users.modal_edit')

    @endif



@endsection

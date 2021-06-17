@if($accion = Session::get('accion'))
    @if($accion == 'editar')
        @if($user = Session::get('user'))

            <script>
                $(document).ready(function () {
                    $('#modalUpdate').modal('show');
                });
            </script>

            <!-- The Modal  EDITABLE-->
            <div class="modal fade" id="modalUpdate">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Editar mis Datos</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <form id="formulario" action="/users/{{$user->id}}}" method="POST" > <!--Enviar a controlador -->
                        @csrf <!--Evitar inyecciones sql-->
                        @method('PUT')
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
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Actualizar">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif

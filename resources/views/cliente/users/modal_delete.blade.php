@if($accion = Session::get('accion'))
    @if($accion == 'eliminar')
        @if($user = Session::get('user'))

            <script>
                $(document).ready(function () {
                    $('#modalDelete').modal('show');
                });
            </script>

            <!-- The Modal  EDITABLE-->
            <div class="modal fade" id="modalDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Mi cuenta</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form id="formulario" action="/users/{{$user->id}}}" method="POST" > <!--Enviar a controlador -->
                        @csrf <!--Evitar inyecciones sql-->
                            @method('DELETE')
                            <div class="modal-body">
                                <h4>Esta seguro de ELIMINAR su cuenta </h4>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" value="Eliminar">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endif

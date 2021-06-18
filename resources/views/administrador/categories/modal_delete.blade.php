@if($accion = Session::get('accion'))
    @if($accion == 'eliminar')
        @if($category = Session::get('category'))

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#modalDelete').modal('show');
                });
            </script>

            <!-- The Modal  AGREGAR-->
            <div class="modal fade" id="modalDelete">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Categoria</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <form id="formulario" action="/categories/{{$category->id}}" method="POST" > <!--Enviar a controlador -->
                        @csrf <!--Evitar inyecciones sql-->
                            @method('DELETE')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Nombre : </label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}"
                                           readonly>
                                </div>
                                <br>
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

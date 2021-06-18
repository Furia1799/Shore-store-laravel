@if($accion = Session::get('accion'))
    @if($accion == 'crear')

        <script type="text/javascript">
            $(document).ready(function () {
                $('#modalAdd').modal('show');
            });
        </script>

        <!-- The Modal  AGREGAR-->
        <div class="modal fade" id="modalAdd">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Categoria</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <form id="formulario" action="/categories" method="POST" > <!--Enviar a controlador -->
                    @csrf <!--Evitar inyecciones sql-->
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nombre : </label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Nombre Marca " maxlength="50" minlength="1" pattern="[A-Z a-z 0-9]+"
                                       title="Ingrese un nombre correcto" required >
                            </div>
                            <br>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" value="Agregar">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endif


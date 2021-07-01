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
                                <h4 class="modal-title">Agregar Direccion</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                            </div>
                            <!-- Modal body -->
                            <form id="formulario" name="formulario" action="/directions" method="POST" > <!--Enviar a controlador -->
                            @csrf <!--Evitar inyecciones sql-->
                                <div>
                                    @if($user = Auth::user())
                                        <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
                                    @endif
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="country">Pais: </label>
                                        <input type="text" class="form-control" name="country" id="country"
                                               placeholder="Nombre Pais" maxlength="50" minlength="5" pattern="[A-Z a-z ]+{3,50}"
                                               title="Ingrese un nombre correcto" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="provincia">Estado :</label>
                                        <input type="text" class="form-control" name="provincia" id="provincia"
                                               placeholder="Nombre Estado" maxlength="50" minlength="5" pattern="[A-Z a-z ]+{3,50}"
                                               title="Ingrese un nombre correcto" required >
                                    </div>
                                    <div class="form-grup">
                                        <label for="city">Cuidad: </label>
                                        <input type="text" class="form-control" name="city" id="city"
                                               placeholder="Nombre Cuidad" maxlength="50" minlength="5" pattern="[A-Z a-z ]+{3,50}"
                                               title="Ingrese un nombre correcto" required >
                                    </div>
                                    <div class="form-grup">
                                        <label for="address">Direccion: </label>
                                        <input type="text" class="form-control" name="address" id="address"
                                               placeholder="Nombre Direccion" maxlength="50" minlength="5" pattern="[A-Z a-z 0-9 #.]+{3,50}"
                                               title="Ingrese un nombre correcto" required >
                                    </div>
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



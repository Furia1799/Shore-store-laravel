@if($accion = Session::get('accion'))
    @if($accion == 'eliminar')
        @if($product = Session::get('product'))

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
                            <h4 class="modal-title">Eliminar Producto</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <form  action="/products/{{$product->id}}" method="POST"> <!--Enviar a controlador -->
                        @csrf <!--Evitar inyecciones sql-->
                            @method('DELETE')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="brand">Marca :</label>
                                    <select class="form-control" name="id_brand" id="brand" readonly>
                                        <option>Nike</option>
                                        <option>Adidas</option>
                                        <option>Umbro</option>
                                        <option>Pirma</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre : </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           value="{{$product->name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripcion :</label>
                                    <textarea class="form-control" name="description" col="40" rows="5" readonly>{{$product->description}}
                                    </textarea>
                                </div>
                                <div class="form-grup">
                                    <label for="price">Precio : </label>
                                    <input type="number" class="form-control" name="price" id="price"
                                           value="{{$product->price}}" readonly >
                                </div>
                                <div class="form-grup">
                                    <label for="stock">Stock : </label>
                                    <input type="number" class="form-control" name="stock" id="stock"
                                           value="{{$product->stock}}" readonly >
                                </div>
                                <br>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image" value="{{$product->image}}" readonly>
                                    <label class="custom-file-label" for="image">Agregar Imagenes</label>
                                </div>
                                <br>
                                <br>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Eliminar">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        @endif
    @endif
@endif


@if($accion = Session::get('accion'))
    @if($accion == 'editar')
        @if($product = Session::get('product'))

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
                            <h4 class="modal-title">Editar Producto</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <form  action="/products/{{$product->id}}" method="POST"> <!--Enviar a controlador -->
                            @csrf <!--Evitar inyecciones sql-->
                            @method('PUT')
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="brand">Marca :</label>
                                    <select class="form-control" name="id_brand" id="brand" required>
                                        <option value="{{$product->id_brand}}" selected >{{$product->id_brand}}</option>
                                        @isset($products)
                                            @foreach($products as $producto)
                                                @if($producto->id_brand != $product->id_brand)
                                                <option value="{{$producto->id_brand}}">{{$producto->id_brand}}</option>
                                                @endif
                                            @endforeach

                                        @endisset

                                        <!--<option>Nike</option>
                                        <option>Adidas</option>
                                        <option>Umbro</option>
                                        <option>Pirma</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre : </label>
                                    <input type="text" class="form-control" name="name" id="name"
                                           value="{{$product->name}}" maxlength="50" minlength="5" pattern="[A-Z a-z 0-9]+"
                                           required >
                                </div>
                                <div class="form-group">
                                    <label for="description">Descripcion :</label>
                                    <textarea class="form-control" name="description"
                                              col="40" rows="5" id="description"  minlength="10" required>{{$product->description}}
                                    </textarea>
                                </div>
                                <div class="form-grup">
                                    <label for="price">Precio : </label>
                                    <input type="number" class="form-control" name="price" id="price"
                                           value="{{$product->price}}" maxlength="10" minlength="1"
                                           pattern="[0-9]+" required >
                                </div>
                                <div class="form-grup">
                                    <label for="stock">Stock : </label>
                                    <input type="number" class="form-control" name="stock" id="stock"
                                           value="{{$product->stock}}" maxlength="10" minlength="1"
                                           pattern="[0-9]+" required >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="image">Agregar imagen</label>
                                    <input type="file" class="form-control" name="image" id="image" required>
                                </div>
                                <!--<div class="custom-file">
                                <img src="" height="75" weight="75" alt=""> accept="image/"
                                    <label class="custom-file-label" for="image">Agregar Imagenes</label>
                                    <input type="file"  type="hidden" class="custom-file-input" name="image" id="image"  required >
                                </div>-->
                                <br>
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

@if($accion = Session::get('accion'))
    @if($accion == 'editar')
        @if($product = Session::get('product'))
            @if($brands = Session::get('brands'))

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
                            <form  action="/products/{{$product->id}}" method="POST" enctype="multipart/form-data"> <!--Enviar a controlador -->
                                @csrf <!--Evitar inyecciones sql-->
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="brand">Marca :</label>
                                        <select class="form-control" name="id_brand" id="brand" required>
                                            @isset($products)
                                                @foreach($brands as $brand)
                                                    @if($product->id_brand == $brand->id)
                                                        <option value="{{$product->id_brand}}" selected>{{$brand->name}}</option>
                                                    @else
                                                        <option value="{{$brand->id_brand}}">{{$brand->name}}</option>
                                                    @endif
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nombre : </label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="{{$product->name}}" maxlength="50" minlength="5" pattern="[A-Z a-z 0-9 .]+"
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
                                    <div>
                                        <label>Imagen :</label>
                                        <br>
                                        <img src="{{$product->image}}" class="img-thumbnail mx-auto d-block" width="250" height="250">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Editar imagen</label><br>
                                        <input type="file" class="form-control" name="image" id="image" required>
                                    </div>
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
@endif

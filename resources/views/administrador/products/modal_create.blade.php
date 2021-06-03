
@isset($products)
<!-- The Modal  AGREGAR-->
<div class="modal fade" id="modalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Agregar Producto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form id="formulario" action="/products" method="POST" enctype="multipart/form-data"> <!--Enviar a controlador -->
                @csrf <!--Evitar inyecciones sql-->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="brand">Marca :</label>
                        <select class="form-control" name="id_brand" id="brand" required>
                            <option value="">Seleccione una Marca</option>
                            @foreach($products as $product)
                            <option value="{{$product->id_brand}}">{{$product->id_brand}}</option>
                           <!-- <option>Adidas</option>
                            <option>Umbro</option>
                            <option>Pirma</option> -->
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre : </label>
                        <input type="text" class="form-control" name="name" id="name"
                               placeholder="Nombre Producto" maxlength="50" minlength="5" pattern="[A-Z a-z 0-9]+"
                               title="Ingrese un nombre correcto" required >
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion :</label>
                        <textarea class="form-control" name="description"
                                  col="40" rows="5"  minlength="10" id="description" required>
                                </textarea>
                    </div>
                    <div class="form-grup">
                        <label for="price">Precio : </label>
                        <input type="number" class="form-control" name="price" id="price"
                               placeholder="Precio Prodcuto" maxlength="10" minlength="1"
                               pattern="[0-9]+" required >
                    </div>
                    <div class="form-grup">
                        <label for="stock">Stock : </label>
                        <input type="number" class="form-control" name="stock" id="stock"
                               placeholder="Stock Producuto" maxlength="10" minlength="1"
                               pattern="[0-9]+" required >
                    </div>
                    <br>
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Agregar Imagenes</label>
                        <input type="file" class="custom-file-input" name="image" id="image" accept="image/" required >
                    </div>
                    <br>
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
@endisset

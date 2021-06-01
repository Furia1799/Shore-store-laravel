@extends('administrador.base.master')

@section('title', 'producto_mostrar')

@section('contenido_administrador')
    <div class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Administrar Productos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    AGREGAR
                </button>
            </div>
        </div>
        <br>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Producto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="brand">Marca :</label>
                                <select class="form-control" id="brand">
                                    <option>Nike</option>
                                    <option>Adidas</option>
                                    <option>Umbro</option>
                                    <option>Pirma</option>
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
                                          rows="5" cols="20" id="description">
                                </textarea>
                            </div>
                            <div class="form-grup">
                                <label for="price">Precio : </label>
                                <input type="number" class="form-control" name="price" id="price"
                                       placeholder="Precio Prodcuto" maxlength="10" minlength="1"
                                       pattern="[0-9]+" required > .00
                            </div>
                            <div class="form-grup">
                                <label for="stock">Stock : </label>
                                <input type="number" class="form-control" name="stock" id="stock"
                                       placeholder="Stock Producuto" maxlength="10" minlength="1"
                                       pattern="[0-9]+" required >
                            </div>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image" required >
                                <label class="custom-file-label" for="image">Agregar Imagenes</label>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Agregar">
                            </div>
                        </form>

                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Table-->
        <div class="row">
            <div class="col-lg-12">
                <div id="tabla_productos" class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Categoria</th>
                            <th>nombre</th>
                            <th>Descripccion</th>
                            <th>precio</th>
                            <th>stock</th>
                            <th>Fecha</th>
                            <th>Imagen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>Moe</td>
                            <td>mary@example.com</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

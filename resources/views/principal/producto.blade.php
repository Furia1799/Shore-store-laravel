@extends('base.master')

@section('title', 'producto')

@section('contenido')
    <link rel="stylesheet" href="../assets/css/producto.css">

    <div  class="row">
        <div class="col-lg-12">
            <h1 id="productos_titulo" class="display-4 text-center">Producto</h1>
        </div>
    </div>
    @isset($product)
    <div class="conntainer">
        <div class="row">
            <div id="imagen_producto" class="col-lg-8">
                <div id="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../{{$product->image}}"
                                     alt="First slide" width="500px" height="650px" >
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/img/producto_adidas/adidas_2.jpg"
                                     alt="Second slide" width="500px" height="650px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../assets/img/producto_adidas/adidas_3.jpg"
                                     alt="Third slide" width="500px" height="650px">
                            </div>
                        </div>
                        <a id="btn_fecha_izquierda" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div  id="producto_descripccion" class="col-lg-3 shadow-lg p-4 mb-4 bg-white">
                <div>
                    <h1 class="display-4">{{$product->name}}</h1>
                    <br>
                    <h2>{{$product->brand->name}}</h2>
                    <br>
                    <p class="text-left">{{$product->description}}</p>
                    <br>
                    <p class="font-weight-bold"> $ {{$product->price}} MXN</p>
                </div>
                <form action="" method="">
                    <div class="form-group">
                        <label for="seleccion">Tallas disponibles :</label>
                        <select class="form-control" id="seleccion">
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                        </select>
                        <br>
                        <input type="submit"  class="btn btn-primary" value="Comprar" id="btn_comprar">
                        <br>
                        <br>
                        <input type="submit"  class="btn btn-warning text-center" value="Agregar Carrito" id="btn_carrito">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endisset
@endsection


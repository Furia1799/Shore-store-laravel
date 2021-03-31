<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/registrar.css">
</head>
<body>
<div class="container">
    <div id="contenedor_registro">
        <div class="row ">
            <div  class="col-lg-12">
                <div class="jumbotron text-center">
                    <h1 class="display-3">Registrar</h1>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div id="formulario_registrar" class="col-lg-8">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre : </label>
                        <input type="text" class="form-control" name="nombre" id="nombre"placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido : </label>
                        <input type="text" class="form-control" name="apellido" id="apellido"placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" name="email" id="email"placeholder="Ingrese su email">
                    </div>
                    <div class="form-grup">
                        <label for="password">Contrasena : </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contrasena">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                        <a href="../index.php">
                            <button type="button" class="btn btn-danger">Regresar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
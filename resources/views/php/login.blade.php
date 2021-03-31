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
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

<div class="container">
    <div id="contenedor_login">
        <div class="row justify-content-center">
            <div id="login" class="col-lg-4 text-center">
                <img src="../img/login_2.png.crdownload" class="rounded" alt="Login" width="200" height="200">
            </div>
        </div>
        <br>
        <div class="row justify-content-center" >
            <div id="formulario" class="col-lg-4">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="text" class="form-control" name="email" id="email"placeholder="Ingrese su Email">
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
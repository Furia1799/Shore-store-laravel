<!-- The Modal  AGREGAR-->
<div class="modal fade" id="modalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crear cuenta</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <form id="formulario" action="/users" method="POST" > <!--Enviar a controlador -->
            @csrf <!--Evitar inyecciones sql-->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre : </label>
                        <input type="text" class="form-control" name="name" id="name"
                               placeholder="Ingrese su Nombre" maxlength="25" minlength="3" pattern="[A-Z a-z]+"
                               title="Solo letras del alfabeto" required >
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido : </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                               placeholder="Ingrese su apellido" maxlength="25" minlength="5" pattern="[A-Z a-z]+"
                               title="Solo letras del alfabeto" required >
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="Ingrese su email" maxlength="25" minlength="5" required >
                    </div>
                    <div class="form-grup">
                        <label for="password">Contrasena : </label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Ingrese su contrasena" maxlength="25" minlength="5" required >
                    </div>
                    <br>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Crear">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

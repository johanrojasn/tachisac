<?php
require('Menu.php');
?>
<div class="main-content-inner">
<?php
require('../Componentes/TablaUsuario.php');
?>
</div>

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <label>Nombre usuario</label>
                <input type="text" name="" id="nombre" class="form-control input-sm">
                <label>Contraseña</label>
                <input type="text" name="" id="pass" class="form-control input-sm">
                <label>id empleado</label>
                <input type="text" name="" id="empleado" class="form-control input-sm">
                <label>id Perfil</label>
                <input type="text" name="" id="perfil" class="form-control input-sm">



                <!--label>Estado</label>
                <input type="text" name="" id="estado" class="form-control input-sm">-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">


                    Agregar
                </button>

            </div>
        </div>
    </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="idusuario" name="" class="form-control input-sm">
                <label>Name usuario</label>
                <input type="text" name="" id="nombreu" class="form-control input-sm">
                <label>pass</label>
                <input type="text" name="" id="passu" class="form-control input-sm">
                <label>idperfil 1 = Admin 2 = soporte 3 = Gerencia </label>
                <input type="text" name="" id="perfilu" class="form-control input-sm">
                <label>Id empleado</label>
                <input type="text" name="" id="empleadou" class="form-control input-sm">
                <label>estado</label>
                <input type="text" name="" id="estadou" class="form-control input-sm">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button>

            </div>
        </div>
    </div>
</div>
<?php
require('Creditos.php');
?>
</body>
<script type="text/javascript">
    $(document).ready(function () {

        $('#guardarnuevo').click(function () {
            nombre = $('#nombre').val();
            pass = $('#pass').val();
            perfil = $('#perfil').val();
            empleado = $('#empleado').val();

            //esta=$('#estado').val();


            agregardatosusuario(nombre, pass, perfil, empleado);
        });



        $('#actualizadatos').click(function () {
            actualizaDatosUsuario();
        });

    });
</script>

</html>

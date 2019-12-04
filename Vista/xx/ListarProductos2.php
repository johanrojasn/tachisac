

<?php
require('Menu.php');
?>
<div class="right_col" role="main">
    <div id="tabla"></div>
</div>
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <label>Perfil</label>
                <input type="text" name="" id="perfil" class="form-control input-sm">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                    Agregar
                </button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="idperfil" name="" class="form-control input-sm">
                <label>Perfil</label>
                <input type="text" name="" id="perfil2" class="form-control input-sm">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>

            </div>
        </div>
    </div>
</div>
<footer>
    <?php
    require('Creditos.php');
    ?>
</footer>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla').load('../Componentes/TablaAlmacenMaiz.php');
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {

        $('#guardarnuevo').click(function () {
            nombre = $('#perfil').val();
            

            //esta=$('#estado').val();


            AgregarPerfil(nombre);
        });



        $('#actualizadatos').click(function () {
            ActualizarPerfil();
        });

    });
</script>


</body>
</html>


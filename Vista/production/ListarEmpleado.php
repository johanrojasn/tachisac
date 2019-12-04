<?php
require('Menu.php');
?>
<div class="main-content-inner">

        <?php
        require('../Componentes/TablaEmpleado.php');
        ?>
  
</div>
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="card-body">
                <form class="needs-validation was-validated" novalidate="">
                    <div class="form-row">                          
                        <div class="col-md-5 mb-3">
                            <label>Nombres</label>

                            <input type="text" class="form-control"  id="Nombres" placeholder="Nombres" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label>Apellidos</label>
                            <input type="text" class="form-control"  id="Apellidos" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" id="guardarnuevo">
                        Agregar Pedido
                    </button>
                </form>
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
             <div class="card-body">
            <form class="needs-validation was-validated" novalidate="">
                <div class="form-row">     
                    <input type="text" class="form-control"  id="idEmpleado" placeholder="" required="">
                    <div class="col-md-5 mb-3">
                        <label>Nombres</label>
                        <input type="text" class="form-control"  id="Nombres2" placeholder="" required="">
                        <div class="invalid-feedback">
                           Por favor, Complete este Campo.
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label>Apellidos</label>
                        <input type="text" class="form-control"  id="Apellidos2" placeholder="" required="">
                        <div class="invalid-feedback">
                            Por favor, Complete este Campo.
                        </div>
                 </div>
         
                <button type="button" class="btn btn-block btn-success" data-dismiss="modal" id="actualizadatos">
                    Actualizar
                </button>
                     </div>
            </form>
              </div>   
        </div>
    </div>
</div>

<?php
require('Creditos.php');
?>
<script type="text/javascript">
    $(document).ready(function () {

        $('#guardarnuevo').click(function () {
            Nombres = $('#Nombres').val();
            Apellidos = $('#Apellidos').val();

            AgregarEmpleado(Nombres,Apellidos);
        });



        $('#actualizadatos').click(function () {
            actualizaEmpleados();
        });

    });
</script>
</body>

</html>

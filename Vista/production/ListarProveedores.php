<?php
require('Menu.php');
?>
<div class="main-content-inner">
 <div class="row">   
   <?php
require('../Componentes/TablaProveedor.php');
?>
</div>
</div>
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
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
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label>Dni</label>
                            <input type="text" class="form-control"  id="Dni" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label>Celular</label>
                            <input type="text" class="form-control"  id="Celular" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" id="guardarnuevo">
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-body">
                <input type="hidden" id="idProveedor" value="" />
                <form class="needs-validation was-validated" novalidate="">
                    <div class="form-row">                          
                        <div class="col-md-5 mb-3">
                            <label>Nombres</label>

                            <input type="text" class="form-control"  id="Nombres2" placeholder="Nombres" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label>Apellidos</label>
                            <input type="text" class="form-control"  id="Apellidos2" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        

                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label>Dni</label>
                            <input type="text" class="form-control"  id="Dni2" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label>Celular</label>
                            <input type="text" class="form-control"  id="Celular2" placeholder="Apellidos" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-block btn-success" data-dismiss="modal" id="actualizadatos">
                        Actualizar
                    </button>
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
            Dni = $('#Dni').val();
            Celular = $('#Celular').val();
            AgregarSalida(Nombres,Apellidos,Dni,Celular);
        });




        $('#actualizadatos').click(function () {
            actualizaProveedor();
        });

    });
</script>
</body>

</html>

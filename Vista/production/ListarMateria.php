<?php
require('Menu.php');
?>
<div class="main-content-inner">
 <div class="row">   
   <?php
require('../Componentes/TablaMateria.php');
?>
</div>
</div>

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="card-body">
                <form class="needs-validation was-validated" novalidate="">
                    <input type="hidden" id="idMateria" value="" />
                    <div class="form-row">                          
                        <div class="col-md-5 mb-3">
                            <label>Producto</label>

                            <input type="text" class="form-control"  id="Materia2" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label>Tipo de Materia</label>
                            <select class="custom-select" required="" id="tMateria2">
                                <option value="" selected="">Seleccione</option>
                                <?php
                                $conexion = conexion();
                                $sql = "Select *from tipodemateria;";
                                $result = mysqli_query($conexion, $sql);
                                while ($ver = mysqli_fetch_row($result)) {
                                    ?>
                                    <option value="<?php echo $ver[0] ?>" ><?php echo $ver[1] ?></option>
                                    <
                                    <?php
                                };
                                ?> 
                            </select>
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
            Materia = $('#Materia').val();
            tMateria = $('#tMateria').val();
            AgregarMateria(Materia,tMateria);
        });



        $('#actualizadatos').click(function () {
            actualizaMateria();
        });

    });
</script>
</body>

</html>

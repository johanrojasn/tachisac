<?php
require('Menu.php');
?>
<div class="main-content-inner">
    <div class="row">   
        <?php
        require('../Componentes/TablaSalida.php');
        ?>
    </div>
</div>
<div class="modal fade" id="modalNuevo" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
  
                <div class="col-md-12 mb-3">
                   <div class="main-content-inner">
    <div class="row">   
        <?php
        require_once "../Controlador/Config/Conexion.php";
        $conexion = conexion();
        ?>
        <script type="text/javascript">
            function llenardatos(a, b, d) {
                document.getElementById('idEntrada').value = a;
                document.getElementById('Producto').value = b;
                document.getElementById('PrecioU').value = d;
            }
        </script>

 
            <div class="card-body">
                <form class="needs-validation was-validated" novalidate="">
                    <div class="form-row">    
                        <input type="hidden" class="form-control"  id="idEntrada" placeholder="" required="">
                        <div class="col-md-3 mb-3">
                            <label>Producto</label>
                            <input type="text" readonly="" class="form-control"  id="Producto" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Cantidad</label>

                            <input type="text"  class="form-control"  id="Cantidad" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                         <div class="col-md-3 mb-3">
                            <label>Precio Unitario</label>

                            <input type="text" readonly="" class="form-control"  id="PrecioU" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Numero de Ollas</label>

                            <input type="text" class="form-control"  id="nOllas" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                   <button type="button" class="btn btn-block btn-primary" id="guardarnuevo">
                        Agregar Pedido
                    </button> 
                           </div>
                </form>
                
            </div>
        </div> 
    </div>
     <div class="col-md-12 mb-3">
                    <div class="data-tables datatable-dark">
                        <table id="dataTable"   class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Producto</th>
                                    <th>Comprobante</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "call sp_ListarEntradaDia();";
                                $result = mysqli_query($conexion, $sql);
                                while ($ver = mysqli_fetch_row($result)) {
                                    $datos = $ver[0] . "||" .
                                            $ver[3] . "||" .
                                            $ver[7] . "||" .
                                            $ver[8];
                                    ?>
                                    <tr>

                                        <td><?php echo $ver[3] ?></td>
                                        <td><?php echo $ver[4] ?></td>
                                        <td>
                                            <button class="btn btn-success ti-check"  onclick="llenardatos('<?php echo $ver[0] ?>', '<?php echo $ver[3] ?>', '<?php echo $ver[8] ?>')">
                                            </button>
                                        </td>

                                        </td>
                                    </tr>
                                    <?php
                                };
                                ?>   
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div> 
        </div>
    </div>

<div class="modal fade" id="modalNuevo2" tabindex="+1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
<?php
require('Creditos.php');
?>
<script type="text/javascript">
        $(document).ready(function () {

         $('#guardarnuevo').click(function () {
            idEntrada = $('#idEntrada').val();
                Cantidad = $('#Cantidad').val();
                PrecioU = $('#PrecioU').val();
                nOllas = $('#nOllas').val();
            AgregarSalida(idEntrada,Cantidad,PrecioU,nOllas);
        });
        
$('#actualizadatos').click(function () {
                ActualizarEmpleado();
            });
        });
 </script>
</body>

</html>

<?php
require('Menu.php');
?>
<div class="main-content-inner">
    <div class="row">   
        <?php
        require('../Componentes/TablaEntrada.php');
        ?>
    </div>
</div>
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="card-body">
                <form class="needs-validation was-validated" novalidate="">
                    <div class="form-row">                          
                        <div class="col-md-4 mb-3">
                            <label>Fecha</label>
                            <input type="date" class="form-control"  id="Fecha" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Materia</label>

                            <select class="custom-select" required="" id="Materia">
                                <option value="" selected="">Seleccione</option>
                                <?php
                                $conexion = conexion();
                                $sql = "Select *from Materia;";
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
                        <div class="col-md-4 mb-3">
                            <label>Comprobante</label>
                            <input type="text" class="form-control"  id="Comprobante" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>

                    </div>
                    <div class="form-row"> 

                        <div class="col-md-4 mb-3">
                            <label>Proveedor</label>
                            <select class="custom-select" required="" id="Proveedor">
                                <option value="" selected="">Seleccione</option>
                                   <?php
                                $conexion = conexion();
                                $sql = "Select *from Proveedores;";
                                $result = mysqli_query($conexion, $sql);
                                while ($ver = mysqli_fetch_row($result)) {
                                    ?>
                                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
                                      <?php
                                };
                                ?> 
                            </select>
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Cantidad</label>
                            <input type="text" class="form-control"  id="Cantidad" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Precio Unitario</label>
                            <input type="text" class="form-control"  id="PrecioU" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Calidad</label>
                            <select class="form-control" required="" id="Calidad">
                                <option value="" selected="">Seleccione</option>
                                <option value="1">Buena</option>
                                <option value="2">Intermedia</option>
                                <option value="3">Mala</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, Seleccione una Opcion.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Comentario</label>
                            <textarea id="Comentario" maxlength="700" class="form-control" required=""></textarea>
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
                <form class="needs-validation was-validated" novalidate="">
                    <input type="hidden" id="idEntrada" value="" />
                    <div class="form-row">                          
                        <div class="col-md-4 mb-3">
                            <label>Fecha</label>
                            <input type="date" class="form-control"  id="Fecha2" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Materia</label>

                            <select class="custom-select" required="" id="Materia2">
                                <option value="" selected="">Seleccione</option>
                                <?php
                                $conexion = conexion();
                                $sql = "Select *from Materia;";
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
                        <div class="col-md-4 mb-3">
                            <label>Comprobante</label>
                            <input type="text" class="form-control"  id="Comprobante2" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>

                    </div>
                    <div class="form-row"> 

                        <div class="col-md-4 mb-3">
                            <label>Proveedor</label>
                            <select class="custom-select" required="" id="Proveedor2">
                                <option value="" selected="">Seleccione</option>
                                   <?php
                                $conexion = conexion();
                                $sql = "Select *from Proveedores;";
                                $result = mysqli_query($conexion, $sql);
                                while ($ver = mysqli_fetch_row($result)) {
                                    ?>
                                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
                                      <?php
                                };
                                ?> 
                            </select>
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Cantidad</label>
                            <input type="text" class="form-control"  id="Cantidad2" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Precio Unitario</label>
                            <input type="text" class="form-control"  id="PrecioU2" placeholder="" required="">
                            <div class="invalid-feedback">
                                Por favor, Complete este Campo.
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Calidad</label>
                            <select class="form-control" required="" id="Calidad2">
                                <option value="" selected="">Seleccione</option>
                                <option value="1">Buena</option>
                                <option value="2">Intermedia</option>
                                <option value="3">Mala</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, Seleccione una Opcion.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Comentario</label>
                            <textarea id="Comentario2" maxlength="700" class="form-control" required=""></textarea>
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

<div class="modal fade" id="modalEdicions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Comprobante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
               <div class="col-md-12">
                            <br>
                            <form class="form-horizontal form-label-left">
                                <input type="hidden" id="idPedido" style=" border: 0;width:230px;" readonly="true">
                                <div class="container">  
                                    <div class="row">
                                        <div class="col-md-7">        
                                            <div class="col-xs-6">
                                                <h1><a href=" "><img alt="" style="width:320px;height:110px; " src="assets/images/126-0.jpg" /></a></h1>
                                            </div>
                                        </div>
                                        <div class="col-md-5">   
                                            <div class="col-xs-6 text-right">
                                                <h1>Comprobante</h1>
                                                <h1><input type="text" id="nOrden" style=" border: 0;width:230px;" readonly="true"></h1>
                                            </div>       
                                        </div>
                                    </div> 
                                    <div>&nbsp;</div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="panel panel-default">
                                                <div class="panel-heading ">
                                                    <h4>De: <input  type="text" id="Proveedor3" style=" border: 0;width:215px;width:250px;"  readonly="true"> 
                                                    </h4>
                                                </div>
                                                <div class="panel-body"></div>
                                            </div>

                                        </div> 
                                        <div class="col-md-6">
                                            <div class="col-xs-5 col-xs-offset-2 text-right">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4>Para : <a href="#">Tachi SAC</a></h4>
                                                    </div>
                                                    <div class="panel-body"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    &nbsp; 
                                </div>
                               
                                &nbsp;
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                <h4>Fecha</h4>
                            </th>
                            <th>
                                <h4>Producto</h4>
                            </th>
                            <th>
                                <h4>Cantidad</h4>
                            </th>
                            <th>
                                <h4>Precio Unitario</h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input  type="text" id="Fecha3" style=" border: 0;width:215px;width:100px;"  readonly="true"></a></td>
                            <td><input  type="text" id="Producto" style=" border: 0;width:215px;width:100px;"  readonly="true"></td>
                            <td><input  type="text" id="Cantidad3" style=" border: 0;width:215px;width:100px;"  readonly="true"></td>
                            <td><input  type="text" id="PrecioU3" style=" border: 0;width:215px;width:100px;"  readonly="true"></td>
                        </tr>
                    </tbody>
                </table>
              <div>
                                    &nbsp; 
                                </div>
                               
                                &nbsp;
                <div class="row">
                                    <div class="col-md-8">

                                    </div>
                                    <div class="">
                                        <table>
                                            <thead>
                                            </thead>
                                            <tbody>
                                            <th>              
                                                Total: S/&nbsp;
                                            </th>
                                            <th>
                                                <input type="text" id="Total" style=" border: 0;width:150px;"  readonly="true">                                                
                                            </th>
                                            </tbody>
                                        </table>            
                                    </div>
                                </div>
                                 <div>
                                    &nbsp; 
                                </div>
                               
                                &nbsp;
                                <input type="button" class="btn btn-block" value="Imprimir" onclick="window.print()">
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
                Fecha = $('#Fecha').val();
                Materia = $('#Materia').val();
                Comprobante = $('#Comprobante').val();
                Proveedor = $('#Proveedor').val();
                Cantidad = $('#Cantidad').val();
                PrecioU = $('#PrecioU').val();
                Calidad = $('#Calidad').val();
                Comentario = $('#Comentario').val();
                AgregarEntrada(Fecha, Materia, Comprobante, Proveedor, Cantidad, PrecioU, Calidad, Comentario);
            });

            $('#actualizadatos').click(function () {
                ActualizarEntrada();
            });

        });
            </script>
</body>

</html>

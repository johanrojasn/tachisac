<?php
require_once "../Controlador/Config/Conexion.php";
$conexion = conexion();
?>

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Administrar</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Inicio</a></li>
                    <li><span>Entrada</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">

        </div>
    </div>
</div>

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Entrada</h4>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                        </button>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a  href="../production/KardexDiarioPDF.php" class="btn btn-info ti-save"> PDF Diario</a>
                        <a  href="../production/KardexMensualPDF.php" class="btn btn-success ti-save"> PDF Mensual</a>
                        <a  href="../production/KardexAnualPDF.php" class="btn btn-danger ti-save"> PDF Anual</a>
                    </div>
                     &nbsp;
                   <div class="btn-group" role="group" aria-label="Basic example">
                       <a  href="../production/KardexDiaAnteriorPDF.php" class="btn btn-info ti-save"> PDF del Dia Anterior</a>
                       <a  href="../production/KardexMesAnteriorPDF.php" class="btn btn-success ti-save"> PDF del Mes Anterior</a>
                       <a  href="../production/KardexAñoAnteiorPDF.php" class="btn btn-danger ti-save"> PDF del Año Anterior</a>
                    </div>                                                         
                </div>
               
               

            </div>
            &nbsp; 

            <div class="data-tables datatable-dark">
                <table id="dataTable2"   class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Producto</th>
                            <th>Comprobante</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "call sp_ListarEntrada();";
                        $result = mysqli_query($conexion, $sql);
                        while ($ver = mysqli_fetch_row($result)) {
                            $datos = $ver[0] . "%&74%6%#" .
                                    $ver[1] . "%&74%6%#" .
                                    $ver[2] . "%&74%6%#" .
                                    $ver[3] . "%&74%6%#" .
                                    $ver[4] . "%&74%6%#" .
                                    $ver[5] . "%&74%6%#" .
                                    $ver[6] . "%&74%6%#" .
                                    $ver[7] . "%&74%6%#" .
                                    $ver[8] . "%&74%6%#" .
                                    $ver[9] . "%&74%6%#" .
                              $ver[10];//       . "%&74%6%#" .
//                                    number_format($ver[11], 2);
                            ?>
                            <tr>
                                <td><?php echo $ver[0] ?></td>
                                <td><?php echo $ver[1] ?></td>
                                <td><?php echo $ver[3] ?></td>
                                <td><?php echo $ver[4] ?></td>
                                <td><?php echo $ver[6] ?></td>
                                <td><?php echo number_format($ver[7], 1) . " kg" ?></td>
                                <td>
                                    <button class="btn btn-success ti-check" data-toggle="modal" data-target="#modalEdicion" onclick="AgregarFrmEntrada('<?php echo $datos ?>')">
                                    </button>
                                    <button class="btn btn-danger ti-close" onclick="preguntarSiNoEntrada('<?php echo $ver[0] ?>')">
                                    </button>
                                    <button class="btn btn-info ti-tag" data-toggle="modal" data-target="#modalEdicions" onclick="AgregarFrmPedidos('<?php echo $datos ?>')">
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











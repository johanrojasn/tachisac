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
                    <li><span>Materia Prima</span></li>
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

            <h4 class="header-title">Materia Prima</h4>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                        </button>
                    </div>
                    <div class="col-md-3">
                        <a href="../production/ProductosPDF.php" class="btn btn-dark">Imprimir PDF</a>
                    </div>
                </div>  

            </div>

            &nbsp;
            <div class="data-tables datatable-dark">
                <table id="dataTable2"   class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Producto</th>
                            <th>Materia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "call sp_ListarMateria();";
                        $result = mysqli_query($conexion, $sql);
                        while ($ver = mysqli_fetch_row($result)) {
                            $datos = $ver[0] . "||" .
                                    $ver[1] . "||" .
                                    $ver[2] . "||" .
                                    $ver[3];
                            ?>
                            <tr>

                                <td><?php echo $ver[1] ?></td>
                                <td><?php echo $ver[3] ?></td>
                                <td>
                                    <button class="btn btn-success ti-check" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformMateria('<?php echo $datos ?>')">
                                    </button>
                                    <button class="btn btn-danger ti-close" onclick="preguntarSiNoUsuario('<?php echo $ver[0] ?>')">
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











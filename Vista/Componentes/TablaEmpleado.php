<?php 
require_once "../Controlador/Config/Conexion.php";
$conexion=conexion();
?>

<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Administrar</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.php">Inicio</a></li>
                    <li><span>Empleado</span></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Empleado</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
            <div class="data-tables datatable-dark">
                <table id="dataTable2"   class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
			    <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select *from Empleado;";
                        $result = mysqli_query($conexion, $sql);
                        while ($ver = mysqli_fetch_row($result)) {
                            $datos = $ver[0]."||".
                                    $ver[1]."||".
                                    $ver[2];

                            ?>
                            <tr>

                                <td><?php echo $ver[1] ?></td>
                                <td><?php echo $ver[2] ?></td>
					<td>
                                            <i class="btn btn-success ti-check" data-toggle="modal" data-target="#modalEdicion" onclick="AgregarFrmEmp('<?php echo $datos ?>')">
						</i>
                                              <i class="btn btn-danger ti-close" onclick="preguntarSiNoEmpleado('<?php echo $ver[0] ?>')">
					</i>
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


			








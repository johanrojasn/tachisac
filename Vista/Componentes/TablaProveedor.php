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
                    <li><span>Proveedor</span></li>
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
            <h4 class="header-title">Lista de TODOS los Proveedores</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
            <div class="data-tables datatable-dark">
                <table id="dataTable2"   class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Nombres</th>
			    <th>Apellidos</th>
                            <th>Dni</th>
                            <th>Celular</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from proveedores;";
                        $result = mysqli_query($conexion, $sql);
                        while ($ver = mysqli_fetch_row($result)) {
                            $datos = $ver[0] . "||" .
                                     $ver[1] . "||" .
                                    $ver[2] . "||" .
                                    $ver[3] . "||" .
                                    $ver[4];

                            ?>
                            <tr>

                                <td><?php echo $ver[1] ?></td>
                                <td><?php echo $ver[2] ?></td>
                                <td><?php echo $ver[3] ?></td>
                                <td><?php echo $ver[4] ?></td>
					<td>
                                            <button class="btn btn-success ti-check" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformProveedor('<?php echo $datos ?>')">
						</button>
                                              <button class="btn btn-danger ti-close" onclick="preguntarSiNoProveedor('<?php echo $ver[0] ?>')">
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


			








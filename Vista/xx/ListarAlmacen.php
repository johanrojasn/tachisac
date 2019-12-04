

<?php
require('Menu.php');
?>


<div class="right_col" role="main">
    <div class="x_panel">
        <div class="x_title">
            <h2> Administrar<small>Almacenes</small></h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#almamcen1" role="tab" aria-controls="home" aria-selected="true">Almacen de Ingredientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#almamcen2" role="tab" aria-controls="profile" aria-selected="false">Almacen de Utensilios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#almamcen3" role="tab" aria-controls="contact" aria-selected="false">Almacen de Productos de Limpieza</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#almamcen4" role="tab" aria-controls="contact" aria-selected="false">Almacen de Uniforme</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="almamcen1" role="tabpanel" aria-labelledby="home-tab">
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#AlmacenAceite" role="tab" aria-controls="home" aria-selected="false">Aceite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#AlmacenMaiz" role="tab" aria-controls="profile" aria-selected="false">Maiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlmacenPollo" role="tab" aria-controls="contact" aria-selected="false">Pollo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlmacenChamcho" role="tab" aria-controls="contact" aria-selected="false">Chancho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlmacenChote" role="tab" aria-controls="contact" aria-selected="false">Chote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlmacenSal" role="tab" aria-controls="contact" aria-selected="false">Sal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlmacenAjinomoto" role="tab" aria-controls="contact" aria-selected="false">Ajinomoto</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="AlmacenAceite" role="tabpanel" aria-labelledby="home-tab">
                            <div id="tabla"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenMaiz" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="tabla2"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenPollo" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="tabla3"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenChamcho" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="tabla4"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenChote" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="tabla5"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenSal" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="tabla6"></div>
                        </div>
                        <div class="tab-pane fade" id="AlmacenAjinomoto" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="tabla7"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="almamcen2" role="tabpanel" aria-labelledby="profile-tab">
                    Tabla 2
                </div>
                <div class="tab-pane fade" id="almamcen3" role="tabpanel" aria-labelledby="contact-tab">
                    Tabla 3
                </div>
                <div class="tab-pane fade" id="almamcen4" role="tabpanel" aria-labelledby="contact-tab">
                    Tabla 4
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Registro</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>              
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Producto*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <select id="Producto" class="form-control" required="">
                                            <option value="0">---Seleccionar----</option>
                                            <?php
                                            $sql = "select * from Producto;";
                                            $result = mysqli_query($conexion, $sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                                $datos = $ver[0] . "||" .
                                                        $ver[1]
                                                ;
                                                ?>
                                                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Cantidad*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <input type="text" name="" id="cantidad" class="form-control">
<!--                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Precio Unitario*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <input type="text" name="punitario" id="punitario" class="form-control">
<!--                                    <span class="fa fa-credit-card-alt form-control-feedback right" aria-hidden="true"></span>-->
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-5">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Registrar Productos Utilizados</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>              
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <form class="form-horizontal form-label-left">
                                <input type="hidden" name="" id="idAlmacen" class="form-control">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Producto*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <select  id="Producto2" class="form-control" disabled="true" required="">
                                            <option value="0">---Seleccionar----</option>
                                            <?php
                                            $sql = "select * from Producto;";
                                            $result = mysqli_query($conexion, $sql);
                                            while ($ver = mysqli_fetch_row($result)) {
                                                $datos = $ver[0] . "||" .
                                                        $ver[1]
                                                ;
                                                ?>
                                                <option value="<?php echo $ver[0] ?>"><?php echo $ver[1] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Cantidad*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <input type="text" name="" id="Cantidad2" class="form-control">
<!--                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>-->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 col-xs-3">Precio Unitario*</label>
                                    <div class="col-md-5 col-sm-9 col-xs-9">
                                        <input type="text" name="pUnitario2" id="pUnitario2" class="form-control">
<!--                                    <span class="fa fa-credit-card-alt form-control-feedback right" aria-hidden="true"></span>-->
                                    </div>
                                </div>
                                <div class="ln_solid"></div>

                                <div class="form-group row">
                                    <div class="col-md-9 offset-md-5">
                                        <button type="button" class="btn btn-success" data-dismiss="modal" id="guardarnuevo">
                                            Actualizar Stock de Almacen
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modalLpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Lista de Pedidos del Dia</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>              
                        <div class="clearfix"></div>
                    </div>
                    <div id="tabla2"></div>

                </div>
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
        $('#tabla').load('../Componentes/TablaAlmacen.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla2').load('../Componentes/TablaAlmacen2.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla3').load('../Componentes/TablaAlmacen3.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla4').load('../Componentes/TablaAlmacen4.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla5').load('../Componentes/TablaAlmacen5.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla6').load('../Componentes/TablaAlmacen6.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tabla7').load('../Componentes/TablaAlmacen7.php');
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $('#guardarnuevo').click(function () {
            proc = $('#Producto').val();
            cant = $('#cantidad').val();
            puni = $('#punitario').val();

            AgregarAlmacen(proc, cant, puni);
        });



//        $('#actualizadatos').click(function () {
//            ActualizarEmpleado();
//        });
    });
</script>
<script lang="javascript" type="text/javascript">
    function Limpiar(control1, control2, control3)
    {
        document.getElementById(control1).value = 0;
        document.getElementById(control2).value = '';
        document.getElementById(control3).value = '';

    }
</script>
</body>
</html>


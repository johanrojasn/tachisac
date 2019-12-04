<?php
require_once('../Controlador/Config/seguridad.php');
require_once "../Controlador/Config/Conexion.php";
$conexion = conexion();
?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tachi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/metisMenu.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.min.css">
        <!-- amcharts css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- Start datatable css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="assets/css/typography.css">
        <link rel="stylesheet" href="assets/css/default-css.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- Alert -->
        <link href="../librerias/alertifyjs/css/themes/default.css" rel="stylesheet" type="text/css"/>
        <link href="../librerias/alertifyjs/css/alertify.css" rel="stylesheet" type="text/css"/>
        <script src="../librerias/alertifyjs/alertify.js" type="text/javascript"></script>
        <script src="../librerias/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../functions/funciones.js" type="text/javascript"></script>

        
    </head>
    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="page-container">
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="Index.php"><img src="assets/images/LOGO TACHI.jpg" alt=""/></a>                       
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li><a href="Index.php"><i class="ti-home"></i> <span>Inicio</span></a></li>
                                <li><a href="#"><i class="ti-shopping-cart-full"></i> <span>Pedidos</span></a></li>
                                <li>
                                    <a href="ListarEntrada.php" aria-expanded="true"><i class="ti-package"></i><span>Almacen de Materia Prima</span></a>
                                </li>
                                <li><a href="ListarSalida.php"><i class="ti-package"></i> <span>Administrar Salida de Materia</span></a></li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-book"></i><span>Mantenimiento</span></a>
                                    <ul class="collapse">
                                        <li><a href="ListarProveedores.php">Proveedor</a></li>
                                        <li><a href="ListarMateria.php">Productos</a></li>
                                        <li><a href="listarUsuario.php">Usuario</a></li>
                                        <li><a href="ListarPerfil.php">Perfil</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-download"></i><span>Reportes</span></a>
                                    <ul class="collapse">
                                        <li><a href="Pdf.php">Producto</a></li>
                                        <li><a href="#">Almacen</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                        </div>
                        <!-- profile info & task notification -->
                        <div class="col-md-6 col-sm-4 clearfix">
                            <div class="user-profile pull-right">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['UserName']; ?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Configuraciones</a>
                                    <a class="dropdown-item" href="../Controlador/config/salir.php">Salir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->


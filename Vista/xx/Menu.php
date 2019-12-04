<?php
require_once('../Controlador/Config/seguridad.php');
require_once "../Controlador/Config/Conexion.php";
$conexion = conexion();
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/logoremain.png" type="image/ico" />
        
        <title>Tachi</title>
    
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
        <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
        <script src="../librerias/alertifyjs/alertify.js"></script>
        <script src="../librerias/jquery-3.2.1.min.js"></script>
        <script src="../functions/funciones.js"></script>
        
      
	

    </head>

    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">

                            <a href="index.php" class="site_title">
<!--                                <img src="images/title.png" style="width: 223px; height: 48px;">-->
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">

                                <img src="images/user.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido</span>
                                <h2><?php echo $_SESSION['UserName']; ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Inicio </a> </li>
                                    <li><a href="ListarPedidos.php"><i class="fa fa-cart-arrow-down"></i> Pedidos </a> </li>
                                    <li><a><i class="fa fa-book"></i>Almacen<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="ListarAlmacen.php">Administrar Almacenes</a></li>
                                        </ul>
                                    </li>
                                     <li><a><i class="fa fa-coffee"></i>Almacen de Ingredientes<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li><a href="ListarProductos1.php">Almacen de Aceite</a></li>
                                                    <li><a href="ListarProductos2.php">Almacen de Maiz</a></li>
                                                    <li><a href="ListarProductos3.php">Almacen de Pollo</a></li>
                                                    <li><a href="ListarProductos4.php">Almacen de Chancho</a></li>
                                                    <li><a href="ListarProductos5.php">Almacen de Chote</a></li>
                                                    <li><a href="ListarProductos6.php">Almacen de Sal</a></li>
                                                    <li><a href="ListarProductos7.php">Almacen de Ajinomoto</a></li>
                                                </ul> 
                                            </li>
                                            
                                    <li><a href="#"><i class="fa fa-hand-grab-o"></i> Almacen de Utensilios </a> </li>
                                    <li><a href="#"><i class="fa fa-archive"></i> Almacen de Limpieza </a></li>
                                    <li><a href="#"><i class="fa fa-user-secret"></i> Almacen de Uniforme </a></li>
                                    
                                    <li><a><i class="fa fa-table"></i>Mantenimiento<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="ListarProducto.php">Productos</a></li>
                                            <li><a href="listarUsuario.php">Usuario</a></li>
                                            <li><a href="ListarPerfil.php">Perfil</a></li>

                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-database"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="#">Almacen</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
             </div>

     



                <div class="top_nav">
                    <div class="nav_menu">
<!--                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>-->
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/user.png" alt=""><?php echo $_SESSION['UserName']; ?>
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                                        <a class="dropdown-item"  href="javascript:;">

                                            <span>Ajustes</span>
                                        </a>
                                        <a class="dropdown-item" href="../Controlador/config/salir.php">

                                            <span>Salir</span>
                                        </a>
                                    </div>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                    
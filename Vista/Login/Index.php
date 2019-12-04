<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tachi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/logoremain.png"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body style="background-color: #666666;">
        <div class="error">
            <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
        </div>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action ="../Controlador/ControladorLogin.php">
                        <span class="login100-form-title p-b-43">
                           Tachi
                        </span>


                        <div class="wrap-input100 validate-input" data-validate = "Se requiere Nombre de Usuario">
                            <input class="input100" type="text" name="txtUsuario">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Nombre de Usuario</span>
                        </div>


                        <div class="wrap-input100 validate-input" data-validate="Se requiere contraseña">
                            <input class="input100" type="password" name="txtClave">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Contraseña</span>
                        </div>



                        <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btnIngresar"name="btnIngresar">
							Ingresar al Sistema
						</button>
					</div>

                        <div class="text-center p-t-46 p-b-20">
                            <span class="txt2">


                            </span>
                        </div>

                        <div class="login100-form-social flex-c-m">

                        </div>
                    </form>

                    <div class="login100-more" style="background-image: url('images/bg-01.jpg');">
                    </div>
                </div>
            </div>
        </div>





        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
    </body>
</html>
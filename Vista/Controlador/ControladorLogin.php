<?php
	if(isset($_POST['txtUsuario']) && isset($_POST['txtClave'])){
		$usuario= $_POST['txtUsuario'];
		$clave = $_POST['txtClave'];
	}

	if($usuario=="" && $clave==""){
		echo "Datos no definidos";
		?> <META http-equiv="Refresh" content="2;URL=../Login/index.php">
		<?php
	}else{

		require_once('../modelo/login.php');

		$objUsuario = new Usuario();

		$Result = $objUsuario->validarlogin($usuario,$clave);

		

		while($file= mysqli_fetch_row($Result)){

			if($file[0] == -1){



				echo "usuario: ".$usuario." no registrado";
				?>
				<META http-equiv="Refresh" CONTENT="2; 
				URL=../Login/index.php">
				<?php
			}
			if($file[0]== -2){
				echo "La clave es incorrecta";
				usuario:"$usuario";
				?>
				<META http-equiv="Refresh" CONTENT="2; 
				URL=../Login/index.php">
				<?php
			}

			if($file[0] > 0){

				

				$ListaUsu= $objUsuario->validarCargo($usuario,$clave);

				//$uemple  = $ListaUsu[3];

				//$_SESSION['user'] = $uemple;

				//echo "el empleado es ".$ListaUsu[3];

				

				foreach($ListaUsu as $lista)
				{
					session_start();

				

				$_SESSION['autenticado'] = "Si";
				$_SESSION['idEmpleado'] = $lista[0];
				$_SESSION['UserName'] = $lista[1];
				$_SESSION['nPerfil'] = $lista[2];
				//$_SESSION['idperfil'] = $lista[4];


				//echo "el usuario que ingreso es ".$lista[1]." ".$lista[2];




				//$tuser= $lista[4];


					//var_dump($lista);

					/*if($lista[4]==1)
					{
						$_SESSION['cargo']= "Administrador";
					}
					else if ($lista[4]==2)
					{
						$_SESSION['cargo']="Almacenero";
					}*/

				}



				//buscamos en la lista el valor que nos importa que es id de perfil
			    
			
								    




				//$_SESSION['cargo'] = $file[4];

				//$cargo = $ListaUsu[4];

				//if($cargo==1)

				//{
					?>
					<META http-equiv="Refresh" CONTENT="0; URL=../production/index.php">
					<?php
				//}
				//else{

				


			}	
		}
	}
?>
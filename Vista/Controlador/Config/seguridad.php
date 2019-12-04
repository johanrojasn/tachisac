<?php
 session_start();


 if(isset($_SESSION['autenticado'])== false){
 	//si no hay aytenticado, mostrar error y volvemos al login
 	echo "no hay sesiòn activa estara siendo redireccionado al login"
 	?>
		<META http-equiv="Refresh" CONTENT="2; URL=../login/index.php">
 	<?php
 	exit();
 }
 elseif ($_SESSION['autenticado'] != "Si"){
 	?>
 	<META http-equiv="Refresh" CONTENT="0; URL=../vista/index.php">
 	<?php
 }
?>
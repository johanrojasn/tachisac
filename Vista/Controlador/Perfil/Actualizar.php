<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['Perfil'];
	$id=$_POST['idPerfil'];

	$sql="call sp_ActualizarPerfil('$n','$id');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

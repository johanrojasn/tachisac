<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$n=$_POST['Perfil'];



	//$e=$_POST['estado'];


	$sql="insert into perfil (nperfil) values ('$n');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Nombres=$_POST['Nombres']; //caja de texto
        $Apellidos=$_POST['Apellidos'];
        $Dni=$_POST['Dni'];
        $Celular=$_POST['Celular'];
	$sql="call sp_AgregarProveedor('$Nombres','$Apellidos','$Dni','$Celular');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
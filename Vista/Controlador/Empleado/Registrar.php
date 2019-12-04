<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Nombres=$_POST['Nombres']; //caja de texto
        $Apellidos=$_POST['Apellidos'];
        
	$sql="call sp_AgregarEmpleado('$Nombres','$Apellidos');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
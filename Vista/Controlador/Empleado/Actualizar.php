<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        
	$Nombres2=$_POST['Nombres2']; //caja de texto
        $Apellidos2=$_POST['Apellidos2'];
        $idEmpleado=$_POST['idEmpleado'];
        
	$sql="call sp_ActualizarEmpleado('$Nombres2','$Apellidos2','$idEmpleado');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
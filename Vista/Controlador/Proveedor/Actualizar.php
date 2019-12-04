<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        
	$Nombres2=$_POST['Nombres2']; //caja de texto
        $Apellidos2=$_POST['Apellidos2'];
        $Dni2=$_POST['Dni2'];
        $Celular2=$_POST['Celular2'];
        $idProveedor=$_POST['idProveedor'];
        
	$sql="call sp_ActualizarProveedor('$Nombres2','$Apellidos2','$Dni2','$Celular2','$idProveedor');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
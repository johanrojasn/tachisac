<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idEntrada=$_POST['idEntrada'];
	$sql="delete from entrada where idEntrada='$idEntrada';";
	echo $result=mysqli_query($conexion,$sql);

 ?>
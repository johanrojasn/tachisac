<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idProveedores=$_POST['idProveedores'];
        
	$sql="delete from proveedores where idProveedores='$idProveedores';";
	echo $result=mysqli_query($conexion,$sql);

 ?>
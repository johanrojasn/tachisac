<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Materia=$_POST['Materia'];
        $tMateria=$_POST['tMateria'];

	$sql="call sp_AgregarMateria('$Materia','$tMateria');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
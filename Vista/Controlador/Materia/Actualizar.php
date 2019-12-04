<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idMateria=$_POST['idMateria'];
	$Materia2=$_POST['Materia2'];
        $tMateria2=$_POST['tMateria2'];

	$sql="call sp_ActualizarMateria('$idMateria','$Materia2','$tMateria2');";
	echo $result=mysqli_query($conexion,$sql);

 ?>

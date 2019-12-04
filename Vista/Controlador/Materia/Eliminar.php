
<?php 
	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idMateria=$_POST['idMateria'];

	$sql="DELETE from materia where idMateria='$idMateria'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
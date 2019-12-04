<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $n1=$_POST['idEmpleado'];
        
	$sql="delete from empleado where idEmpleado='$n1';";
	echo $result=mysqli_query($conexion,$sql);

 ?>
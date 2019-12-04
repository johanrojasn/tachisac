<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$Fecha=$_POST['Fecha']; //caja de texto
        $Materia=$_POST['Materia'];
        $Comprobante=$_POST['Comprobante'];
        $Proveedor=$_POST['Proveedor'];
        $Cantidad=$_POST['Cantidad'];
        $PrecioU=$_POST['PrecioU'];
        $Calidad=$_POST['Calidad'];
        $Comentario=$_POST['Comentario'];
        
	$sql="call sp_AgregarEntrada('$Fecha','$Materia','$Comprobante','$Proveedor','$Cantidad','$PrecioU','$Calidad','$Comentario');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
        $idEntrada=$_POST['idEntrada'];
	$Fecha2=$_POST['Fecha2']; //caja de texto
        $Materia2=$_POST['Materia2'];
        $Comprobante2=$_POST['Comprobante2'];
        $Proveedor2=$_POST['Proveedor2'];
        $Cantidad2=$_POST['Cantidad2'];
        $PrecioU2=$_POST['PrecioU2'];
        $Calidad2=$_POST['Calidad2'];
        $Comentario2=$_POST['Comentario2'];
        
	$sql="call sp_ActualizarEntrada('$idEntrada','$Fecha2','$Materia2','$Comprobante2','$Proveedor2','$Cantidad2','$PrecioU2','$Calidad2','$Comentario2');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
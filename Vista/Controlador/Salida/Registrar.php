<?php 

	require_once "../Config/Conexion.php";
	$conexion=conexion();
	$idEntrada=$_POST['idEntrada']; //caja de texto
        $Cantidad=$_POST['Cantidad'];
        $PrecioU=$_POST['PrecioU'];
        $nOllas=$_POST['nOllas'];
        
	$sql="insert into salida(idEntrada,Cantidad,PrecioUnitario,NOllas) values('$idEntrada','$Cantidad','$PrecioU','$nOllas');";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php
	$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

	$regpagina=7;

	$inicio=($pagina>1) ? (($pagina * $regpagina)- $regpagina):0;

	$registros=$pdo->prepare("
		SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT $inicio,$regpagina
		");

	$registros->execute();
	$registros=$registros->fetchAll();

	$totalregistros=$pdo->query("SELECT FOUND_ROWS() as total");
	$totalregistros=$totalregistros->fetch()['total'];

	$numeropaginas=ceil($totalregistros/$regpagina);
  ?>
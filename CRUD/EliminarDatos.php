<?php

	include ('../Config/Conexion.php');
	$Id = $_REQUEST['Id'];

	$sql = $conexion -> prepare("DELETE FROM clientes WHERE Id = ?");
	$resultado = $sql->execute([$Id]);

	if ($resultado) {
		header("Location: ../Index.php");
	}
?>
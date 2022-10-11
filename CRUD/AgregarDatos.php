<?php
	include "../Config/Conexion.php";

	$nombreCliente = $_POST['NombreC'];
	$saldo = $_POST['Saldo'];
	$estado = $_POST['Estado'];

	$sql = $conexion -> prepare("INSERT INTO clientes (NombreUsuario, Saldo, Estado) VALUES (?,?,?)");
	$resultado = $sql->execute([$nombreCliente,$saldo,$estado]);

	if ($resultado) {
		header("Location: ../Index.php");
	}else{
		echo "Algo salio mal";
	}
?>
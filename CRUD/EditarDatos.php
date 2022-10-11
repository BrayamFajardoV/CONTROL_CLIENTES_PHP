<?php
	include ("../Config/Conexion.php");
	
	$Id = $_POST["Id"];
	$nombreCliente = $_POST['NombreC'];
	$saldo = $_POST['Saldo'];
	$estado = $_POST['Estado'];

	$sql = $conexion->prepare('UPDATE clientes SET NombreUsuario = ?,Saldo = ?, Estado = ? WHERE Id = ?');
	$resultado = $sql->execute([$nombreCliente,$saldo,$estado,$Id]);

	if ($resultado === TRUE) {
       header("Location: ../Index.php");
    }else {
        echo "Algo salio mal!";
    }

?>
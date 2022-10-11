<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS JQUERY-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<title>Control de clientes</title>
</head>
<body>
	<h1 class="bg-primary p-2 text-white text-center">
		<i class="fa-solid fa-users"></i>
		CONTROL DE CLIENTES
	</h1>
	<div class="container">
		<a class="btn btn-primary" href="Forms/FormInsert.php">
		<i class="fa-sharp fa-solid fa-plus"></i>
			Agregar Cliente
		</a>
	</div>
	<br>
	<div class="container">
		<table class="table" id="example">
		  <thead class="table-dark text-center">
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Nombre Cliente</th>
		      <th scope="col">Saldo</th>
		      <th scope="col">Estado</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <br>
		  <tbody>
		  	<?php
		  		include ('Config/Conexion.php');

		  		$sql = $conexion -> query("SELECT * FROM clientes");
		  		$resultado = $sql->fetchAll(PDO::FETCH_OBJ);

		  		foreach ($resultado as $row) {
		  	?>
			  	<tr>
			      <th scope="row"><?php echo $row -> Id?></th>
			      <td><?php echo $row -> NombreUsuario?></td>
			      <td><?php echo $row -> Saldo?></td>
			      <td><?php echo $row -> Estado?></td>
			      <td>
			      	<a class="btn btn-warning" href="Forms/FormEdit.php?Id=<?php echo $row->Id?>">
				      	<i class="fa-sharp fa-solid fa-pen-to-square"></i>
				      	Editar
				  	</a>
					<a class="btn btn-danger" href="CRUD/EliminarDatos.php?Id=<?php echo $row->Id?>">
						<i class="fa-sharp fa-solid fa-trash"></i>
						Eliminar
					</a>
			      </td>
			    </tr>
		  	<?php
		  		}
		  	?>
		  </tbody>
		</table>
		<br>
	</div>
	<footer class="text-center text-white fixed-bottom bg-primary">
	  <!-- Copyright -->
	  <div class="text-center p-3">
	    © 2022 Copyright:
	    <a class="text-white" href="https://www.youtube.com/channel/UCV4MG6Yzgq09EkytV2a85VA">YamDevs</a>
	  </div>
	  <!-- Copyright -->
	</footer>
	<script type="text/javascript " src="Js/App.js"></script>
	<!--JQUERY-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!--AJAX-->
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	  <script>
        $(document).ready(function() {
            $('#example').DataTable({
            	stateSave: true,
                pageLength : 5,
    			lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
            });
        });
    </script>

</body>
</html>
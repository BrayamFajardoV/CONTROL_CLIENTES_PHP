<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<title>Agregar Cliente</title>
</head>
<body>
	<h1 class="bg-primary p-3 text-white text-center">
			<i class="fa-solid fa-users"></i>
			CONTROL DE CLIENTES
	</h1>

	<h2 class="text-center bg-dark text-white p-2 container rounded">AGREGAR CLIENTE</h2>
	<form class="container" method="POST" action="../CRUD/AgregarDatos.php">
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Nombre Cliente</label>
	    <input type="text" class="form-control" placeholder="Pepito Perez" name="NombreC" id="Cliente">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Saldo</label>
	    <input type="text" class="form-control" placeholder="8000000" name="Saldo" id="Saldo">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Estado</label>
	    <input type="text" class="form-control" placeholder="Activo/Inactivo" name="Estado" id="Estado">
	  </div>

	  <button type="submit" class="btn btn-primary">Agregar Cliente</button>
	  <a class="btn btn-dark" href="../Index.php">Regresar</a>
	</form>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
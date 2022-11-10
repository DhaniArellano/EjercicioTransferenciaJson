<?php
$filename = 'clientes.json';
$data = file_get_contents($filename); //data read from json file
$clientes = json_decode($data); //decode a data
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Read a JSON File</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="container" style="width:500px;">
		<div class="table-container">

			<table id="tbstyle">
				<tbody>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Direccion</th>
						<th>Ciudad</th>
					</tr>
					<?php foreach ($clientes as $cliente) { ?>
					<tr>
						<td>
							<?= $cliente->nombre; ?>
						</td>
						<td>
							<?= $cliente->apellido; ?>
						</td>
						<td>
							<?= $cliente->correo; ?>
						</td>
						<td>
							<?= $cliente->direccion; ?>
						</td>
						<td>
							<?= $cliente->ciudad; ?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
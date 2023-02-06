<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Calculadora en PHP</title>
</head>
<body>
	<h1>Mi Calculadora en PHP</h1>	
	<div class="calculadora">
		<form action="calculos.php" method="post">
			<input type="number" name="numero1" placeholder="Aquí va el primer operando">
			<select>
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>
			<input type="number" name="numero2" placeholder="Aquí va el segundo operando">
			<input type="submit">
		</form>
	</div>
	<div class="resultado">
		<h3>Resultado:</h3>
		<?php
			include 'calculos.php';
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];


		?>
	</div>
</body>
</html>

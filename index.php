<?php
		include 'calculos.php';
		$resultado="0";

		if(isset($_GET['num1'],$_GET['num2'],$_GET['operador'])){
			$resultado=operacion($_GET['num1'],$_GET['num2'],$_GET['operador']);
		}else{
			$resultado="0";
		}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Mi Calculadora en PHP</title>
</head>
<body>
	<h1>Mi Calculadora en PHP</h1>
	<div class="calculadora">
		<form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
			<input type="text" class="campo" name="num1" value="" placeholder="1er operando">
			<select name="operador">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>
			<input type="text" class="campo" name="num2" value="" placeholder="2do operando">
			<input type="submit" value="Calcular operación">
		</form>
		<input type="text" name="resultado" value="<?= $resultado ?>"disabled>
		
		</input>
	</div>
</body>
</html>

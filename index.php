<!-- Jorge Ramirez - C.I. 28219444 -->
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
    <title>Mi Calculadora en PHP</title>
</head>
<body>
	<h1>Mi Calculadora en PHP</h1>
	<div class="calculadora">
		<form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
			<input type="text" class="campo" name="num1" value="" placeholder="1er operando">
			<select class="operador" name="operador">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="x">x</option>
				<option value="/">/</option>
			</select>
			<input type="text" class="campo" name="num2" value="" placeholder="2do operando">
			<input type="submit" value="Calcular operación">
		</form>
		<input class="resultado" type="text" name="resultado" value="<?= $resultado ?>"disabled>
		
		</input>
	</div>
</body>
</html>

<style>
	body {
		font-family: sans-serif;
		display:flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}
	h1 {
		flex-basis:100%;
		text-align: center;
	}
	.calculadora {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-wrap: wrap;
	}
	.campo {
		flex-basis: 33.3%;
	}
	.operador {
		flex-basis: 33.3%
	}
	.resultado {
		text-align: center;
		margin: 7.5% 100% 0 100%;
		font-size: 1.75rem;
		width: fit-content;
	}
</style>
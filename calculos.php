<?php
function operacion($operando1, $operando2, $operador)
{
	if (isset($operando1, $operando2, $operador)) {
		if (is_numeric($operando1) || is_numeric($operando2)) {
			if ($operador == "+") {
				return $operando1 + $operando2;
			} elseif ($operador == "-") {
				return $operando1 - $operando2;
			} elseif ($operador == 'x') {
				return $operando1 * $operando2;
			} elseif ($operador == "/") {
				return $operando1 / $operando2;
			} else {
				return "Operador invalido";
			}
		} else {
			return "ERROR-> se necesitan solo números para operar";
		}
	}else
	{
		$operando1="";
		$operando2="";
		$operador="";
	}
}

<?php
# Jorge Ramirez - C.I. 28219444
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
			return "No se permiten caracteres";
		}
	}else
	{
		$operando1="NULL";
		$operando2="NULL";
		$operador="NULL";

		return "No se puede operar con caracteres vacios";
	}
}

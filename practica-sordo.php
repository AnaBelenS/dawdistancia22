<?php

/**
  * @author Ana Belén Sordo González
  * @version 1.0
*/

/**
  * Función suma de dos números
  * @param int $num1
  * @param int $num2
  * @return float
*/
function suma ($num1, $num2){
	$resultadosuma = $num1 + $num2;
	return $resultadosuma;
}

$suma = suma(24,42);
echo $suma;

/**
  * Función multiplica 2 por un número
  * @param int $num
  * @return float
*/
function multiplicaPor2 ($num){
	$resultadoMultiplicacion = $num * 2;
	return $resultadoMultiplicacion;
}

$multiplicacion = multiplicaPor2(10);
echo $multiplicacion;

/**
  * Función buenosDias desarrolladores
  * @internal disponible solo como documentación interna para los desarrolladores
  * @return mensaje de saludo
*/

function buenosDias (){
	return "Buenos días Desarrolladores";
}
?>

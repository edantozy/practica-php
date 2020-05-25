<?php 

/* Tipos de datos en PHP. */
$x = 'ENTEROS';
	$a = 1234;	//Enteros
	$b = -43;	//Negativos
	$c = 0350;	//Octales
	$d = 0xa5;	//Hexadecimales

$x = 'FLOAT&DOUBLE';
//Se llama float cuando es de 32bits, double cuando es de 64bits
	$e = 1.8e4;
	$f = 10.123;

$x = 'CADENA';
	$g = 'Este es un texto';

$x = 'BOOLEANOS&VALORES LÓGICOS';
	$h = true;
	$i = false;

/*
	\n : nueva línea
	\r : retorno de carro
	\t : tabulación
	\\ : barra invertida
	\$ : signo de dolar
	\" : comillas dobles
*/

		$x = 'TIPOS DE DATOS COMPUESTOS';
// - Array
// - Object*
// - Callable*
// - Iterable*



/* Para convertir un tipo de dato a otro

(int)$a;
(float)$a;
(string)$a;
(array)$a;
(object)$a;


*/

//Para saber qué tipo de dato es una variable y su valor o cantidad de strings.
//echo var_dump($a);

$x = 'IMPRESIÓN';
//echo - print() - printf()

$x = 'CONSTANTES';
// Universales: FILE - LINE - PHP_VERSION - PHP_OS - TRUE - FALSE - E_ERROR - E_WARNING - E_PARSE - E_NOTICE

//define('PI', 3.141516); 
//phpinfo() - phpversion()
//echo PI*3;

$x = 'OPERADORES';
/*
	- Adición (+)
	- Sustracción (-)
	- Multiplicación (*)
	- División (/)
	- Módulo (%)
	- Exponenciación ($a=5; $b=3; echo $a**$b)
*/

$x = 'DE ASIGNACIÓN';
/*
	=
	+=
	-=
	*=
	/=
	%=
*/

$x = 'DE COMPARACIÓN';
/*
	==	(IGUALDAD)
	===	(IGUALDAD DEL MISMO TIPO Y EL MISMO VALOR)
	!=	(DIFERENTE DE)
	<>	(DIFERENTE DE)
	<	(MENOR QUE)
	>	(MAYOR QUE)
	<=	(MENOR O IGUAL)
	>=	(MAYOR O IGUAL)
	<=>	(NAVE ESPACIAL)
	?	(TERNARIO)
	??	(FUSIÓN NULL)
*/

$uno = 10;
$dos = 20;

/*echo $uno <=> $dos;
Si $uno es menor a $dos da -1
Si $uno es igual a $dos da 0
Si $uno es mayor a $dos da 1
*/

/*echo $uno==$dos ? 'ES IGUAL' : 'NO ES IGUAL';*/

/*echo $asdf ?? $dos ?? 'NO EXISTE';
Si $asdf no existe que tome el valor de $dos y si no existe que tome el valor de 'NO EXISTE'
*/


/*echo `dir`;
Para ejecutar comandos como en consola */

$x = 'DE INCREMENTO Y DECREMENTO';
/*
	++$a	(preincremento)
	$a++	(postincremento)
	--$a	(predecremento)
	$a--	(postdecremento)

->>>>EJEMPLO:
$va = 5;
echo (5+(++$va)).'<br>';
echo $va;
*/

$x = 'LÓGICOS';
/*
	and - &&
	||	- or
	xor		(Cualquiera de los dos pero no los dos)
	!	O

$z = 1;
$y = 20;
if ($z == 10 xor $y ==20) {
	echo "Se cumple la condición.";	
} else {
	echo "No se cumple la condición.";
}

*/


?>
<?php 


$a = 200;

/*
ESTRUCTURAS DE CONTROL CONDICIONALES
-->if
if (isset($a) && empty($a)) echo "Esto es correcto.";
else echo "Esto es incorrecto";

-->if-else
-->if-elseif
if ($a == 100) echo "Es igual a 100";
elseif ($a == 200) echo "Es igual a 200";
else echo "Que no es ninguno";

-->switch
switch ($a) {
	case '100':
		echo "Vale 100";
		break;
	case '200':
		echo "Vale 200";
		break;
	default:
		echo "No es ninguno";
		break;
}

ESTRUCTURAS REPETITIVAS
-->while
while ($a > 10) echo $a--.'<br>';

-->do-while
do echo $a--.'<br>';
while ($a >= 20);

-->for
for ($i=0; $i <= 10; $i++) echo $i.'<br>';

-->foreach
$companeros = [
	'Paula'		=> 10,
	'Mario'		=> 5,
	'Ricardo'	=> 7.2
];
foreach ($companeros as $key => &$value) {
	$value = $value*3;
	$key = $key.' - ';
	echo $key.' '.$value.'<br>';
}
unset($value); //quita la referencia con el último elemento.
echo var_dump($companeros);

-->break-continue
for ($i=0; $i <= 50; $i++) { 
	if ($i >= 10 and $i <=20){
		echo "Este es el número - ".$i.'<br>';
		continue;
	}
	echo $i.'<br>';
}



->ARREGLOS (ARRAY)<-
 unidimensionales
	predefinidos
	asociativos
$semana = ["Lunes", "Martes", "Miércoles", "Jueves", Viernes]
 multidimensionales
	predefinidos
	asociativos
$matrices = [
	[10,20,30,40,50],
	'dos' => [100,200,300,400,500],
	["Gato", "Perro", "Loro"]
]
echo $matrices[2][1]; //Daría 100

*/


?>



<table border="1">
	<tr>
		<td>Numero1</td>
		<td>Numero2</td>
	</tr>
</table>
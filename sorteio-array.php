<?php
//cria array com 20 elementos aleatorios
for ($i=0; $i < 20; $i++) { 
	$array[$i] = rand(1, 10);
}

//agrupa repetições de valores
$arrayValues = array_count_values($array);

//pega a chave dos números com mais repetições
$arrayKeys = array_keys($arrayValues, max($arrayValues));

echo "Array sorteado = [";
for ($i=0; $i < count($array); $i++) { 
	echo $array[$i]. ", ";
}
echo "] <br><br>";

//verifica se existe mais de 1 número com a mesma quantidade de repetições
if (count($arrayKeys) > 1) {
	echo "Os números que mais se repetem são os números: <br>";
	for ($i=0; $i < count($arrayKeys); $i++) {
		echo $i == count($arrayKeys) - 1 ? $arrayKeys[$i] : $arrayKeys[$i] .", ";
	}
	echo "<br> Todos eles se repetem ".$arrayValues[$arrayKeys[0]]." vezes";
}else{
	echo "O número que mais se repete é o: ". $arrayKeys[0] ."<br>";
	echo "Ele se repete ".$arrayValues[$arrayKeys[0]]." vezes";
}
<?php

function somaPares($lista) {
	$soma = 0;
	foreach ($lista as $numero) {
		if ($numero % 2 == 0) {
			$soma += $numero;
		}
	}

	return $soma;
}

$minhaLista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "O resultado da soma dos pares na lista é: " . somaPares($minhaLista) . "\n";
?>

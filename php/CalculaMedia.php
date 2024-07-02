<?php

function calculaMedia($lista) {
	$somatorio = array_sum($lista);
	$tamanho = count($lista);

	return $somatorio/$tamanho;
}

$minhaLista = [67, 73, 54];
echo "A média da lista " . $minhaLista . " é: " . number_format(calculaMedia($minhaLista), 2) . "\n";
?>

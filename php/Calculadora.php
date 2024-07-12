<?php

function add($x, $y) {
	return $x + $y;
}

function sub($x, $y) {
	return $x - $y;
}

function mul($x, $y) {
	return $x * $y;
}

function div($x, $y) {
	return $x / $y;
}

echo "Qual operação deseja fazer? \n";
echo "\t1. Adição\n";
echo "\t2. Subtração\n";
echo "\t3. Multiplicação\n";
echo "\t4. Divisão\n";

$choice = fgets(STDIN);
echo "\n";

echo "Escolha o primeiro número: ";
$x = fgets(STDIN);

echo "Escolha o segundo número: ";
$y = fgets(STDIN);

switch($choice) {
	case 1:
		echo "\nO resultado da operação é: " . add($x, $y) . "\n";
		break;
	case 2:
		echo "\nO resultado da operação é: " . sub($x, $y) . "\n";
		break;
	case 3:
		echo "\nO resultado da operação é: " . mul($x, $y) . "\n";
		break;
	case 4:
		echo "\nO resultado da operção é: " . div($x, $y) . "\n";
		break;
	default:
		echo"\nVocê não inseriu uma opção válida.\n";
		break;

}
?>

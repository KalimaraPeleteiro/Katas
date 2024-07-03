<?php

function validarCpf($cpf) {

	$digitosCpf = preg_replace("/[^0-9]/", "", $cpf);
	echo "Validando CPF " . $digitosCpf . "...\n";

	// Primeira Verificação - Possui 11 dígitos?
	if (strlen($digitosCpf) < 11) {
		echo "CPF com menos de 11 dígitos!\n";
		return false;
	}

	// Segunda Verificação - Todos os dígitos são iguais?
	if (preg_match('/(\d)\1{10}/', $digitosCpf)) {
		echo "Todos os dígitos são iguais. Achou mesmo que isso seria válido?\n";
		return false;
	}

	// Terceira Verificação - Validação do Dígito Verificador
	for ($i = 9; $i < 11; $i++) {
		$soma = 0;

		for ($j = 0; $j < $i; $j ++) {
			$soma += $digitosCpf[$j] * (($i + 1) - $j);
		}

		$resto = $soma % 11;
		
		if ($resto < 2) {
			$digito = 0;
		}
		else {
			$digito = 11 - $resto;
		}

		if ($digito != $digitosCpf[$i]) {
			return false;
		}
	}

	return true;

}

$cpf1 = '123.456.789-09';
$cpf2 = '111.111.111-11';
$cpf3 = '529.982.247-25';

echo "CPF 1: " . (validarCpf($cpf1) ? 'Válido' : 'Inválido') . "\n";
echo "CPF 2: " . (validarCpf($cpf2) ? 'Válido' : 'Inválido') . "\n";
echo "CPF 3: " . (validarCpf($cpf3) ? 'Válido' : 'Inválido') . "\n";
?>

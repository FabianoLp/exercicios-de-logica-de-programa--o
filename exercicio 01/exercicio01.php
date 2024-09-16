<?php
// Inicializa as variáveis

$a = 10;
$b = 20;

// Exibe os valores iniciais
echo "Valores iniciais: A = $a, B = $b\n";

// Troca os valores utilizando uma variável temporária
$temp = $a;
$a = $b;
$b = $temp;

// Exibe os valores após a troca
echo "Valores após a troca: A = $a, B = $b\n";
?>

<?php

echo "===========Tabuada==============" . PHP_EOL;

$n1 = (int)readline("Insira um número inteiro: ");
$operacao = readline("Qual operação deseja usar? (+, -, *, /) ");
$n2 = (int)readline("Insira mais um número inteiro: ");
echo "+++++OPERAÇÃO+++++" . PHP_EOL;

if (!($operacao == "+" || $operacao == "-" || $operacao == "*" || $operacao == "/")) {
    echo "operação invalida" . PHP_EOL;
}

if ($operacao == "/" && $n2 == 0) {
    echo "A operação não pode ser realizada" . PHP_EOL;
    exit;
}

if ($operacao == "+") {
    $resultado = $n1 + $n2;
} elseif ($operacao == "-") {
    $resultado = $n1 - $n2;
} elseif ($operacao == "*") {
    $resultado = $n1 * $n2;
} elseif ($operacao == "/") {
    $resultado = $n1 / $n2;
}

echo "Primeiro numero : {$n1}" . PHP_EOL;
echo "Segundo numero : {$n2}" . PHP_EOL;
echo "Operacao: {$operacao}" . PHP_EOL;
echo "----------------------------------------" . PHP_EOL;
echo "Resultado $resultado" . PHP_EOL;
echo "{$n1} {$operacao} {$n2} = {$resultado}". PHP_EOL;

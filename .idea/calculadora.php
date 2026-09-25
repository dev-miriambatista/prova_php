<?php
echo "===========CALCULADORA==============" . PHP_EOL;

function lerNumero($mensagem) {
    do {
        $valor = strtr(readline($mensagem), ',', '.');
    } while (!is_numeric($valor));
    return (float)$valor;
}
$n1 = lerNumero("Insira um número: ");
$operacao = readline("Qual operação deseja usar? (+, -, *, /) ");
if (!($operacao == "+" || $operacao == "-" || $operacao == "*" || $operacao == "/")) {
    echo "operação invalida" . PHP_EOL;
    exit;
}
$n2 = lerNumero("Insira mais um número: ");
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
echo "+++++OPERAÇÃO+++++" . PHP_EOL;
echo "Primeiro numero : {$n1}" . PHP_EOL;
echo "Segundo numero : {$n2}" . PHP_EOL;
echo "Operacao: {$operacao}" . PHP_EOL;
echo "----------------------------------------" . PHP_EOL;
echo "Resultado $resultado" . PHP_EOL;
echo "{$n1} {$operacao} {$n2} = {$resultado}" . PHP_EOL;

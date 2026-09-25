<?php

echo "===========Tabuada==============" . PHP_EOL;

$n1 = (int)readline("Insira um número inteiro: ");

echo "+++++TABUADA DO {$n1}+++++" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {


    $resultado = $n1 * $i;

    echo "{$n1} * {$i} = {$resultado}" . PHP_EOL;
}

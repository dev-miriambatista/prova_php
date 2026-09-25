<?php

echo "===========TABUADA==============" . PHP_EOL;

do {
    $entrada = trim(readline("Insira um número inteiro: "));

    if ($entrada === "") {
        echo "Não pode ficar em branco" . PHP_EOL;
        continue;
    }

    if (!ctype_digit($entrada)) {
        echo "Digite apenas números inteiros, sem letras ou espaços" . PHP_EOL;
        continue;
    }

    $n1 = (int)$entrada;

} while ($entrada === "" || !ctype_digit($entrada));

if ($n1 <= 0 || $n1 > 10) {
    echo "Somente de 1 a 10" . PHP_EOL;
    exit;
}

echo "+++++TABUADA DO {$n1}+++++" . PHP_EOL;

for ($i = 0; $i <= 10; $i++) {

    $resultado = $n1 * $i;

    echo "{$n1} * {$i} = {$resultado}" . PHP_EOL;
}

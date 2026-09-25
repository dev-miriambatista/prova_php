<?php

echo "================== CONTROLE DE COLHEITA =====================" . PHP_EOL;


$idColheita = rand(1000, 9999);
$dataAtual = date("d/m/Y");

$responsavel = lerTexto("Nome do responsavel: ");
$qtdaCulturas = lerNumero("Quantidade de culturas: ");
$nomeCultura = lerTexto("Nome do cultura: ");
$qtdaProduzida = lerNumero("Quantidade de quilograma: ");
$valor_venda_quilograma = lerNumero("Valor estimado da venda por quilograma: ");

if ($qtdaProduzida <= 0 || $valor_venda_quilograma <= 0) {
    echo "Essa cultura não poderá participar dos cálculos" . PHP_EOL;
    exit;
}

function lerTexto($mensagem) {
    do {
        $valor = readline($mensagem);
    } while ($valor === "" || preg_match('/[\d\s]/', $valor));
    return $valor;
}

function lerNumero($mensagem) {
    do {
        $valor = strtr(readline($mensagem), ',', '.');
    } while (!is_numeric($valor));
    return (float)$valor;
}

function calcularCultura($qtda, $valorUnitario) {
    return $qtda * $valorUnitario;
}

function classificacao($valorProducao) {
    if ($valorProducao < 5000) {
        return "PRODUÇÃO PEQUENO PORTE";
    } elseif ($valorProducao >= 5000 && $valorProducao <= 19999.99) {
        return "PRODUÇÃO MÉDIO PORTE";
    } else {
        return "PRODUÇÃO GRANDE PORTE";
    }
}

$valorProducao = calcularCultura($qtdaProduzida, $valor_venda_quilograma);

function culturasCadastradas($nomeCultura, $qtdaProduzida, $valor_venda_quilograma, $valorProducao) {
    echo "Nome: {$nomeCultura}" . PHP_EOL;
    echo "Quantidade Produzida: {$qtdaProduzida}" . PHP_EOL;
    echo "Valor por Kl: R$" . number_format($valor_venda_quilograma, 2, ',', '.') . PHP_EOL;
    echo "Valor da Produção: R$" . number_format($valorProducao, 2, ',', '.') . PHP_EOL;
}

function resumo($idColheita, $dataAtual, $responsavel, $qtdaCulturas, $qtdaProduzida, $valorProducao) {
    echo "Código da colheita: {$idColheita}" . PHP_EOL;
    echo "Data: {$dataAtual}" . PHP_EOL;
    echo "Responsavel: {$responsavel}" . PHP_EOL;
    echo "Quantidade de culturas válidas: {$qtdaCulturas}" . PHP_EOL;
    echo "Quantidade total produzida em kls: {$qtdaProduzida}" . PHP_EOL;
    echo "Valor total estimado da colheita: R$" . number_format($valorProducao, 2, ',', '.') . PHP_EOL;
    echo "Classificação: " . classificacao($valorProducao) . PHP_EOL;
}


culturasCadastradas($nomeCultura, $qtdaProduzida, $valor_venda_quilograma, $valorProducao);
resumo($idColheita, $dataAtual, $responsavel, $qtdaCulturas, $qtdaProduzida, $valorProducao);

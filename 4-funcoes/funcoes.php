<?php

// Função que recebe dois números e retorna a soma
function somar(int $a, int $b): int {

    return $a + $b;
}

// Procedimento: executa uma ação sem retornar valor
function exibirMensagem(string $mensagem): void {

    echo $mensagem;
}

echo "<h2>Função com retorno</h2>";

// Chama a função e guarda o resultado
$resultado = somar(5, 3);

echo "Resultado: $resultado";

echo "<hr>";

echo "<h2>Procedimento</h2>";

// Chama o procedimento
exibirMensagem("Olá, mundo!");

?>

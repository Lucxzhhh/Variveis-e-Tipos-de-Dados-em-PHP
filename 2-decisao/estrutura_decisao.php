<?php

// Variável utilizada para testar a condição
$idade = 20;

echo "<h2>If / Else</h2>";

// Verifica se a idade é menor que 18
if ($idade < 18) {

    echo "Menor de idade";

} else {

    echo "Maior de idade";
}

echo "<hr>";

echo "<h2>Switch</h2>";

// Variável que representa o dia da semana
$dia = "seg";

// Verifica o valor da variável
switch ($dia) {

    case "seg":
        echo "Segunda-feira";
        break;

    case "ter":
        echo "Terça-feira";
        break;

    default:
        echo "Outro dia";
}

?>

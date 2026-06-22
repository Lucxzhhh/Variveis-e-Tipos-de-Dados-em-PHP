<?php

echo "<h2>Laço For</h2>";

// Repete de 1 até 5
for ($i = 1; $i <= 5; $i++) {

    echo $i . "<br>";
}

echo "<hr>";

echo "<h2>Laço While</h2>";

// Inicializa a variável
$x = 1;

// Executa enquanto x for menor ou igual a 5
while ($x <= 5) {

    echo $x . "<br>";

    // Incrementa x
    $x++;
}

echo "<hr>";

echo "<h2>Laço Foreach</h2>";

// Array de frutas
$frutas = ["Maçã", "Banana", "Uva"];

// Percorre todos os elementos do array
foreach ($frutas as $fruta) {

    echo $fruta . "<br>";
}

?>

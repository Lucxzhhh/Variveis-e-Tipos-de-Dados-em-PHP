<?php

// Variável do tipo String
$numeroTexto = "100";

echo "<h2>Antes da conversão</h2>";

// Mostra o tipo original
var_dump($numeroTexto);

echo "<hr>";

// Converte a String para Integer
$numeroInteiro = (int)$numeroTexto;

echo "<h2>Depois da conversão</h2>";

// Mostra o novo tipo
var_dump($numeroInteiro);

?>

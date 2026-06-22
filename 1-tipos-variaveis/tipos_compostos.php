<?php

// Array: armazena vários valores em uma única variável
$notas = [8, 9, 10];

// Criação de uma classe
class Aluno {

    // Atributo da classe
    public $nome = "Eduarda";
}

// Criação de um objeto da classe Aluno
$aluno = new Aluno();

echo "<h2>Array</h2>";

// Mostra as informações do array
var_dump($notas);

echo "<br><br><h2>Objeto</h2>";

// Mostra as informações do objeto
var_dump($aluno);

?>

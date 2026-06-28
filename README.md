# Trabalho PHP

## Grupo B2-Maria Eduarda Mesquita, Lucas Caldas, Rafael Alves e Samantha Maciel

### Link do vídeo:  https://youtu.be/y4npIW0tdIQ


---


# Variáveis e Tipos de Dados em PHP

## 1. Introdução

O PHP é uma linguagem de programação amplamente utilizada no desenvolvimento web. Para armazenar e manipular informações, utiliza **variáveis** e diferentes **tipos de dados**. Além disso, oferece recursos como **estruturas de decisão**, **laços de repetição**, **funções** e **procedimentos** para controlar o fluxo dos programas.

---

## 2. Variáveis em PHP

Variáveis são utilizadas para armazenar dados que podem ser utilizados ao longo do programa.

### Exemplo

```php
$nome = "Carlos";
$idade = 20;
```

Nesse exemplo:

- `$nome` armazena uma string.
- `$idade` armazena um número inteiro.

---

## 3. Tipos de Dados em PHP

O PHP suporta diversos tipos de dados:

| Tipo | Descrição |
|------|-----------|
| String | Valores de texto |
| Integer (int) | Números inteiros |
| Float | Números decimais |
| Boolean | Verdadeiro ou falso |
| Array | Conjunto de valores |
| Object | Instância de uma classe |
| NULL | Variável sem valor |
| Resource | Referência a recursos externos |

Para verificar o tipo e o valor de uma variável, utiliza-se a função `var_dump()`.

### Exemplo

```php
$x = 5;
var_dump($x);
```

**Saída:**

```php
int(5)
```

### 3.1 String

Uma string é uma sequência de caracteres.

```php
$x = "Hello World!";
var_dump($x);
```

**Saída:**

```php
string(12) "Hello World!"
```

### 3.2 Integer (int)

Representa números inteiros.

```php
$x = 100;
var_dump($x);
```

**Saída:**

```php
int(100)
```

### 3.3 Float

Representa números com casas decimais.

```php
$x = 10.365;
var_dump($x);
```

**Saída:**

```php
float(10.365)
```

### 3.4 Boolean

Representa dois estados possíveis:

- `true` (verdadeiro)
- `false` (falso)

```php
$x = true;
var_dump($x);
```

**Saída:**

```php
bool(true)
```

### 3.5 Array

Permite armazenar vários valores em uma única variável.

```php
$carros = array("Volvo", "BMW", "Toyota");
var_dump($carros);
```

### 3.6 Object

Objetos armazenam dados e comportamentos definidos em classes.

```php
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
```

### 3.7 NULL

Representa uma variável sem valor.

```php
$x = "Hello World!";
$x = null;

var_dump($x);
```

**Saída:**

```php
NULL
```

---

## 4. Conversão de Tipos (Casting)

O PHP permite alterar o tipo de uma variável sem modificar seu valor.

```php
$x = 5;
$x = (string) $x;

var_dump($x);
```

**Saída:**

```php
string(1) "5"
```

---

## 5. Estruturas de Decisão

As estruturas de decisão permitem executar diferentes ações dependendo de uma condição.

### Exemplo com if

```php
$idade = 18;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
```

### Exemplo com switch

```php
$dia = 2;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
}
```

---

## 6. Laços de Repetição

Os laços permitem repetir uma ação várias vezes.

### For

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
```

### While

```php
$i = 1;

while ($i <= 5) {
    echo $i;
    $i++;
}
```

### Foreach

```php
$nomes = ["Ana", "Carlos", "João"];

foreach ($nomes as $nome) {
    echo $nome;
}
```

---

## 7. Funções e Procedimentos

Funções são blocos de código reutilizáveis.

### Função com retorno

```php
function somar($a, $b) {
    return $a + $b;
}

echo somar(5, 3);
```

**Resultado:**

```php
8
```

### Procedimento (sem retorno)

```php
function saudacao() {
    echo "Olá, seja bem-vindo!";
}

saudacao();
```

---

## 8. Conclusão

As variáveis e os tipos de dados são fundamentais para o desenvolvimento em PHP. Combinados com estruturas de decisão, laços de repetição e funções, permitem criar aplicações dinâmicas e organizadas. Compreender esses conceitos é essencial para o desenvolvimento de sistemas web eficientes.

---

## Referência

- W3Schools – PHP Data Types
- https://www.w3schools.com/php/php_datatypes.asp


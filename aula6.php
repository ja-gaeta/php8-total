<?php

// $a = 1.234;
// $b = 1.2e3;
// $c = 7E-10;
// $d = 1_234_456.567; // da versão 7.4.0 em diante

// echo $a . '<br>';
// echo $b . '<br>';
// echo $c . '<br>';
// echo $d . '<br>';

// $e = 1.1234567890123;
// $e = 1.1234567890123 + 0.000_000_000_000_05;
// echo $e;

// $valor = 0.1 + 0.2;
// $valor = 10 + 20;
// $valor = $valor / 100;
$valor = bcadd('0.1', '0.2', 1);
// $valor = '0.3';

if ($valor == 0.3) {
  echo 'Verdadeiro';
} else {
  echo 'Falso';
}

echo '<br>';
var_dump($valor);

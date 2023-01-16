<?php

// declare(strict_types=1);

#########################################
## Tipos de Dados e Conversão de Tipos ##
#########################################

# Escalares:
  # bool --> true / false
  $fim = true;
  # int --> números reais (...-3, -2, -1, 0, 1, 2, 3...)
  $idade = 45;
  # float --> números decimais (...-0.1, 0.0, 0.75, 2.125...)
  $valor = 12.95;
  # string --> cadeias de caracteres ('banana', "abacaxi")
  $mensagem = 'Salve, galera!';

  // var_dump($fim);
  // echo $fim . '<br>';
  // var_dump($idade);
  // echo $idade . '<br>';
  // var_dump($valor);
  // echo $valor . '<br>';
  // var_dump($mensagem);
  // echo $mensagem . '<br>';

# Compostos:
  # array
  $motos = ['bmw', 1250, 2.5, true];
  // echo $motos;
  // print_r($motos);
  # object
  # callable
  # iterable

# Especiais:
  # resource
  # null

function soma(int $a, int $b) {
  var_dump($a, $b);
  echo '<br>';
  return $a + $b;
}

$total = soma(3.5, 5);
var_dump($total);

<?php

// echo 'Zeca é um "boia fria"';
// echo '<br>';
// echo "Zeca é um \"boia fria\"";
// echo '<br>';
// echo "Fomos ao McDonald's";
// echo '<br>';
// echo 'Fomos ao McDonald\'s';
// echo '<hr>';
// echo '<h1>PHP Total</h1>';
// echo '<br>';
// echo '<h1\>PHP Total</h1\>';
// echo '<br>';
// echo htmlspecialchars('<h1>PHP Total</h1>');

// $terminou = false;

// echo $terminou;
// echo '<br>';
// var_dump($terminou);

// modificador --> bool / boolean

// var_dump((bool) "");
// echo '<br>';
// var_dump((bool) 0);
// echo '<br>';
// var_dump((bool) "0");
// echo '<br>';
// var_dump((bool) false);
// echo '<br>';
// var_dump((bool) 0.0);
// echo '<br>';
// var_dump((bool) []);
// echo '<br>';
// var_dump((bool) array());
// echo '<br>';
// var_dump((bool) NULL);
// echo '<br>';
// var_dump((bool) 1);
// echo '<br>';
// var_dump((bool) -1.1);
// echo '<br>';
// var_dump((bool) array(5));
// echo '<br>';
// var_dump((bool) NAN);

$teste = 5 != 5;

var_dump($teste);
echo '<br>';
// echo $teste;

if ($teste) {
  echo 'verdadeiro';
} elseif (!$teste) {
  echo 'falso';
}
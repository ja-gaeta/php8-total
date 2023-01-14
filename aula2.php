<?php
    #############
    # VARIÁVEIS #
    #############

    // começa com $
    // não pode começar com número, espaço ou especiais, exceto _
    // _ no início só em usos especiais
    // atribuição de valores: = (não confundir com == ou ===)
    // tipos básicos: string e inteiros
    // evitar nomes abreviados, exceções: $i, $j, $k
    // evitar nomes acentuados ou cedilhados...
    // atribuição por referência (&$)

    // $nome = 'Mario';
    // $idade = 25;
    // $sobrenome = 'Dias';
    // echo $nome;
    // echo '<br>';
    // echo $idade;
    // $nome_completo_do_sujeito = 'Mario Dias';
    // $n = 'Jorge'; // evitar abreviações
    // $preço = 50;
    // echo '<br>';
    // echo $preço;
    
    $temperatura1 = 25;
    // $temperatura2 = $temperatura1;
    $temperatura2 = &$temperatura1;
    $temperatura1 = 30;
    echo $temperatura1;
    echo '<br>';
    echo $temperatura2;

    
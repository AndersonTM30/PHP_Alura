<?php
    # Em arrays associativos, o PHP só aceita números inteiros ou strings nos seus índices
    $array = [
        1 => 'a',
        '1' => 'b',
        1.5 => 'c',
        true => 'd',
        'teste' => 'testando'
    ];

    foreach($array as $indice) {
        echo $indice . PHP_EOL;
    }
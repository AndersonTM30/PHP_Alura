<?php
    echo "A ideia agora é exibir a tabuada de determinado número. \nOu seja, temos um número armazenado em uma variável qualquer, \ne queremos exibir o resultado da sua multiplicação de 1 até 9.\n";

    $numero = 4;
    for($i = 1; $i <= 10; $i++) {
        $tabuada = $numero * $i;
        echo "$numero x $i:  $tabuada\n";
    }
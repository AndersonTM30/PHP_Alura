<?php

    $idade = 17;
    $numeroDePessoas = 1;
    if ($idade >= 18) {
        echo "Você tem $idade anos." . PHP_EOL;
        echo 'Pode entrar sozinho';
    } else if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade e está acompanhado(a), pode entrar.";
    } else {
        echo "Você tem $idade anos, não pode entrar.";
    }
<?php

    # No PHP é possível criar funções(subrotinas) para que sejam executadas em vários lugares do código

    function exibirMensagem($mensagem) {
        echo $mensagem . PHP_EOL;
    }
    
    $contasCorrentes = [
        '123.456.789-10' => [
            'titular' => 'Vinicius',
            'saldo' => 1000
        ], 
        '123.456.789-11' => [
            'titular' => 'Maria',
            'saldo' => 10000
        ], 
        '123.456.789-12' => [
            'titular' => 'Alberto',
            'saldo' => 300
        ]
    ];

    $contasCorrentes[] = [
        'titular' => 'Cláudia',
        'saldo' => 1500
    ];

    if(500 > $contasCorrentes['123.456.789-11']['saldo']) {
        exibirMensagem("Você não tem saldo suficiente para realizar o saque!");
    } else {
        $contasCorrentes['123.456.789-11']['saldo'] -= 500;
    }

    if(500 > $contasCorrentes['123.456.789-12']['saldo']) {
        exibirMensagem("Você não tem saldo suficiente para realizar o saque!");
    } else {
        $contasCorrentes['123.456.789-12']['saldo'] -= 500;
    }

    foreach ($contasCorrentes as $cpf => $conta) {
       exibirMensagem("Titular: " . $conta['titular']);
       exibirMensagem("CPF: " . $cpf );
       exibirMensagem("Saldo: " . $conta['saldo']);
       exibirMensagem("==========================");
    }
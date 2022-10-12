<?php

    # Funções tem retorno de um determinado valor

    function sacar($conta, $valorASacar) {
        if($valorASacar > $conta['saldo']) {
            exibirMensagem("Você não tem saldo suficiente para realizar o saque!");
        } else {
            $conta['saldo'] -= $valorASacar;
        }
        return $conta;
    }

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

    $contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

    foreach ($contasCorrentes as $cpf => $conta) {
       exibirMensagem("Titular: " . $conta['titular']);
       exibirMensagem("CPF: " . $cpf );
       exibirMensagem("Saldo: " . $conta['saldo']);
       exibirMensagem("==========================");
    }
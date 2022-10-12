<?php

    function sacar(array $conta, float $valorASacar): array {
        if($valorASacar > $conta['saldo']) {
            exibirMensagem("Você não tem saldo suficiente para realizar o saque!");
        } else {
            $conta['saldo'] -= $valorASacar;
        }
        return $conta;
    }

    function depositar(array $conta, float $valorADepositar): array {
        if($valorADepositar > 0) {
            $conta['saldo'] += $valorADepositar;
        } else {
            exibirMensagem('Não é possível realizar saldo com valor negativo!');
        }
        return $conta;
    }

    function exibirMensagem(string $mensagem) {
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
    $contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 500);

    foreach ($contasCorrentes as $cpf => $conta) {
       exibirMensagem("|Titular: {$conta['titular']} |CPF: {$cpf} |Saldo: {$conta['saldo']}|");
       exibirMensagem("==========================");
    }
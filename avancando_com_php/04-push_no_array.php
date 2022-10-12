<?php
    # No php é possível adicionar nomes nos índices do array para poder percorrer um dado específico
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

    $contasCorrentes['123.456.789-14'] = [
        'titular' => 'Cláudia',
        'saldo' => 1500
    ];

    foreach ($contasCorrentes as $cpf => $conta) {
       echo "Titular: " . $conta['titular'] . PHP_EOL;
       echo "CPF: " . $cpf . PHP_EOL;
       echo "Saldo: " . $conta['saldo'] . PHP_EOL;
       echo "==========================". PHP_EOL;
    }
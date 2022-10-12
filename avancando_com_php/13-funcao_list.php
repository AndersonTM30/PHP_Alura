<?php
    #Importando arquivo externos
    require_once '11.1-codigo_exportado.php';
    
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
    titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

    foreach ($contasCorrentes as $cpf => $conta) {
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        exibirMensagem("|Titular: $titular |CPF: {$cpf} |Saldo: $saldo|");
        exibirMensagem("==========================");
    }
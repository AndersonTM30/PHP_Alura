<?php

    use alura\banco\model\conta\Conta;
    use alura\banco\model\conta\Titular;
    use alura\banco\model\Cpf;
    use alura\banco\model\Endereco;
    
    require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-89'),
        'Isis Galdino',
        new Endereco('Petrópolis', 'bairro teste', 'rua teste', '77')
    ), 2
    );

    $conta->depositar(500);
    $conta->sacar(100);
    echo $conta->recuperarSaldo();
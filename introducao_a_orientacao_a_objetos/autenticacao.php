<?php
    require_once 'autoload.php';

    use alura\banco\model\Cpf;
    use alura\banco\model\funcionario\{Diretor};
    use alura\banco\service\Autenticador;

    $autenticador = new Autenticador();

    $diretor = new Diretor(
        "José de Lima",
        new Cpf('456.987.123-85'),
        3000
    );

    $autenticador->tentaLogin($diretor, '1234');

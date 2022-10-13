<?php
    require_once 'autoload.php';

    use alura\banco\service\ControladorDeBonificacoes;
    use alura\banco\model\{Cpf};
    use alura\banco\model\funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};

    $umFuncionario = new Desenvolvedor(
        'Anderson Ferreira',
        new Cpf('123.456.789-85'),
        2000
    );

    $umFuncionario->sobeDeNivel();

    $umaFuncionaria = new Gerente(
        "Alana",
        new Cpf('898.654.315-66'),
        3000
    );

    $umDiretor = new Diretor(
        'Ana Paula',
        new Cpf('123.789.456-11'),
        5000
    );

    $umEditor = new EditorVideo(
        'Henrique',
        new Cpf('915.357.789-64'),
        1500
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificacaoDe($umFuncionario);
    $controlador->adicionaBonificacaoDe($umaFuncionaria);
    $controlador->adicionaBonificacaoDe($umDiretor);
    $controlador->adicionaBonificacaoDe($umEditor);

    echo $controlador->recuperaTotal();

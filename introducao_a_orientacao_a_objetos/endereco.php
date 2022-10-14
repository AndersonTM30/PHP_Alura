<?php

    use alura\banco\model\Endereco;

    require_once 'autoload.php';

    $umEndereco = new Endereco('Maceió','Vergel', 'Rua da Morte', '666');
    $outroEndereco = new Endereco('Salvador','Candoblé', 'Rua do catimbó', '12');

    $umEndereco->rua;
    echo $umEndereco . PHP_EOL;
    echo $outroEndereco; 
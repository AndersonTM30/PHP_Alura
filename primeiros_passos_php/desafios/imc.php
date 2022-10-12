<?php
    echo "Calcule o imc de uma determinada pessoa:\n";
    $peso = 82;
    $altura = 1.70;
    $imc = $peso / ($altura * $altura);
    echo "$imc\n";
    if($imc < 18.5) {
        echo "IMC: $imc" . PHP_EOL;
        echo "Classificação: Magreza" . PHP_EOL;
        echo "Obesidade (Grau): 0" . PHP_EOL;
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        echo "IMC: $imc" . PHP_EOL;
        echo "Classificação: Normal" . PHP_EOL;
        echo "Obesidade (Grau): 0" . PHP_EOL;
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo "IMC: $imc" . PHP_EOL;
        echo "Classificação: Sobrepeso" . PHP_EOL;
        echo "Obesidade (Grau): I" . PHP_EOL;
    } elseif ($imc >= 30 && $imc <= 39.9) {
        echo "IMC: $imc" . PHP_EOL;
        echo "Classificação: Obesidade" . PHP_EOL;
        echo "Obesidade (Grau): II" . PHP_EOL;
    } elseif ($imc > 40) {
        echo "IMC: $imc" . PHP_EOL;
        echo "Classificação: Obesidade Grave" . PHP_EOL;
        echo "Obesidade (Grau): III" . PHP_EOL;
    }

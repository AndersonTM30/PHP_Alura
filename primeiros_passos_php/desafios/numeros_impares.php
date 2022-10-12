<?php
    echo "Calcule todos os números ímpares de 0 até 100:\n";

    for($numero = 0; $numero <= 100; $numero++) {
        if($numero % 2 != 0) {
            echo "Resultado: $numero\n";
        }
    }
    
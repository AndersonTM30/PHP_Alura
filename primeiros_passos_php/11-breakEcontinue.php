<?php
    echo "Contador 1" . PHP_EOL;
    for($contador = 1; $contador <= 15; $contador++) {
        if ($contador == 13) {
            continue;
        } else {
            echo "#$contador" . PHP_EOL;
        }
    }
    echo "==============================" . PHP_EOL;

    echo "Contador 2" . PHP_EOL;

    for($contador2 = 1; $contador2 <= 15; $contador2++){
        if($contador2 == 13) {
            break;
        } else {
            echo "#$contador2" . PHP_EOL;
        }
    }

    echo "==============================" . PHP_EOL;
    

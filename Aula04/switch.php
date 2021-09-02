<?php

$i = 'everton';

for ($i = 0; $i < 5; ++$i) {
    switch ($i) {
        case 0:
            echo "i igual 0 <br>";
            break;
        case 1:
            echo "i igual 1 <br>";
            break 2;
        case 2:
            echo "i igual 2 <br>";
            break;
        case 1000:
            echo "i igual 1000 <br>";
            break;
        case 'everton':
            echo "i igual everton <br>";
            break;
        default:
            echo "Opção inválida $i <br>";
    }
}

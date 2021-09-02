<?php

$A = [[2, 1, 2],
      [6, 7, 0],
      [9, 1, 5]];

$A[1][2] = 89;

echo $A[1][2] . '<br>';

$D = [2, -4, 'Teste', -8];

echo $D[2][2] . '<br>';

$mult = [[[23]],
         [[45]]];

echo $mult[0][0][0] . '<br>';
echo $mult[1][0][0] . '<br>';

echo '<pre>' . print_r($A , true) . '</pre><br>';
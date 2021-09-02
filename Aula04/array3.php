<?php

$A = [[2, 1, 2],
    [6, 7, 0],
    [9, 1, 5]];

echo '<pre>' . print_r($A , true) . '</pre><br>';

$A[1][2] = $A[1][0] + $A[1][1];

echo '<pre>' . print_r($A , true) . '</pre><br>';
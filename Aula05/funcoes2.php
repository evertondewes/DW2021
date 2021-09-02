<?php

function calcula_bonus($salario)
{
    return $salario * 1.1;
}

$salario = 50;

$salario_com_bonus = calcula_bonus($salario);

echo $salario_com_bonus . '<br>';

echo  calcula_bonus(100) . '<br>';
echo  calcula_bonus(30) . '<br>';
echo  calcula_bonus(56) . '<br>';
echo  calcula_bonus(34) . '<br>';
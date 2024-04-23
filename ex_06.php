<?php

function my_comb_n($n)
{
    $startI = pow(10, $n - 1);
    $endI = pow(10, $n) - 1;

    for ($i = $startI; $i <= $endI; $i++) {
        echo $i . "\n";
    }
}

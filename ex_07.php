<?php

function my_sort_int_tab(array &$tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        for ($j = 0; $j < count($tab) - 1; $j++) {
            if ($tab[$j + 1] < $tab[$j]) {
                $temp = $tab[$j + 1];
                $tab[$j + 1] = $tab[$j];
                $tab[$j] = $temp;
            }
        }
    }
}

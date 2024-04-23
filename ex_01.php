<?php

function my_generate_file(string $name)
{
    $name .= ".txt";
    $handle = fopen($name, 'w');

    if (!$handle) {
        return false;
    }

    return true;
}

<?php

function write_into_my_file(string $str, string $file, $append = false)
{
    $mode = !$append ? "w" : "a";
    $handle = fopen($file, $mode);

    if (!$handle) {
        return false;
    }

    $addContent = fwrite($handle, $str);
    fclose($handle);

    return (bool)$addContent;
}

<?php

function my_cat_files(...$paths)
{
    $nbr_args = func_num_args();
    $result = "";

    foreach ($paths as $path) {
        if (!empty($result)) {
            $result .= "_____";
        }

        $handle = fopen($path, "r");
        if (filesize($path) !== 0) {
            $content = fread($handle, filesize($path));
            $result .= $content;
        }
    }
    return $result . PHP_EOL;
}

<?php

function display_xml_nodes($xmlstr, $node)
{

    if (!is_string($xmlstr) || !is_string($node)) {
        return false;
    }

    $xml = simplexml_load_string($xmlstr);

    if (!$xml) {
        return false;
    }

    $nodeContent = $xml->xpath("//{$node}");

    if (!$nodeContent) {
        return false;
    }

    foreach ($nodeContent as $value) {
        echo $value . PHP_EOL;
    }

    return true;
}

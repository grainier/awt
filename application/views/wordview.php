<?php
/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 11/13/14
 * Time: 11:16 AM
 */


$root = new DOMDocument();
$root_element = $root->createElement("words");
$root->appendChild($root_element);

foreach ($words as $w) {
    $data_element = $root->createElement("br", $w);
    $root_element->appendChild($data_element);
}

echo $root->saveXML();


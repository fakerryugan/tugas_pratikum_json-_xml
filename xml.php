<?php
header('Content-Type: application/xml');

$file = 'komik.xml';

$method = $_SERVER['REQUEST_METHOD'];

$xml = file_exists($file) ? simplexml_load_file($file) : new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><komiklist></komiklist>');

if ($method == 'POST') {
    $input = file_get_contents('php://input');
    $xml_input = simplexml_load_string($input);

    $komik = $xml->addChild('komik');
    $komik->addChild('id', count($xml->komik) + 1);
    $komik->addChild('nama', $xml_input->nama);
    $komik->addChild('chapter', $xml_input->chapter);

    $genres = $komik->addChild('genre');
    foreach ($xml_input->genre->item as $g) {
        $genres->addChild('item', $g);
    }

    $xml->asXML($file);
} elseif ($method == 'GET') {
    echo $xml->asXML();
}
?>

<?php
header('Content-Type: application/xml');
$xml = new SimpleXMLElement('<pasien/>');
$perpus2 = $xml->addChild('id');
$perpus2->addChild('nomor', '102');
$perpus2->addChild('nama', 'si bijak di bandung');
$perpus2->addChild('penulis', 'hayus dina');
$perpus2->addChild('genre', 'slice of life');
$perpus3 = $xml->addChild('id');
$perpus3->addChild('nomor', '023');
$perpus3->addChild('judul', 'yuk belajar membaca');
$perpus3->addChild('penulis', 'rina adina');
$perpus3->addChild('genre', 'study');
echo $xml->asXML();
?>

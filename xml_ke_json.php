<?php
header('Content-Type: application/json');
$file = 'komik.xml';
$xml = simplexml_load_file($file);
$json = json_encode($xml);
echo $json;
?>

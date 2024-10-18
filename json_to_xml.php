<?php
header('Content-Type: application/xml');

$json = file_get_contents('http://localhost:3000/komik');
$data = json_decode($json, true);

function sanitize_element_name($name) {
    $name = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $name);
    return is_numeric(substr($name, 0, 1)) ? 'item_' . $name : $name;
}

function array_to_xml($data, &$xml_data) {
    foreach ($data as $key => $value) {
        $key = sanitize_element_name($key);
        $subnode = is_array($value) ? $xml_data->addChild($key) : $xml_data->addChild($key, htmlspecialchars($value));
        if (is_array($value)) array_to_xml($value, $subnode);
    }
}

$xml_data = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><komiklist></komiklist>');
array_to_xml($data, $xml_data);
echo $xml_data->asXML();
?>

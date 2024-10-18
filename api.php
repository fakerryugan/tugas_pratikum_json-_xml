<?php header('Content-Type: application/json');
// Data dummy
$persons = [
 [
 "id" => 1,
 "nama" => "John Doe",
 "umur" => 30,
 "alamat" => [
 "jalan" => "Jalan ABC",
 "kota" => "Jakarta"
 ],
 "hobi" => ["membaca", "bersepeda"]
 ],
 [
 "id" => 2,
 "nama" => "Jane Doe",
 "umur" => 25,
 "alamat" => [
 "jalan" => "Jalan DEF",
 "kota" => "Bandung"
 ],
 "hobi" => ["menulis", "berenang"]
 ]
];

 echo json_encode($persons);
?>

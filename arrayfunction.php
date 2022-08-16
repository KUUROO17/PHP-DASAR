<?php 

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//variabel value ini adalah punya value atau isi array nya di deklerasikan secara default
$mapfunction = fn(int $value) => $value * 10;
$dataresult = array_map($mapfunction, $data);
var_dump($dataresult);

//data di tampilkan secara terbalik
rsort($data);
var_dump($data);

//untuk mengmbil key nya saja
var_dump(array_keys($data));

//untuk mengambil value nya saja
var_dump(array_values($data));

$person =[
    "first-name" => "ahmad",
    "second-name" => "wali",
    "last-name" => "alchalidi"
];
//untuk mengmbil key nya saja
var_dump(array_keys($person));

//untuk mengambil value nya saja
var_dump(array_values($person));
?>
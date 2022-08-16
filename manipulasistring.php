<?php 

$name = "Ahmad Wali Alchalidi";
//cara menggabungkan beberapa echo kedalam satu echo
echo "NAME :" .$name . PHP_EOL;
echo "NAME :" . 100 . PHP_EOL;


$valuestring = (string)100;
var_dump($valuestring);

$valueint = (int)"salah";
var_dump($valueint);

$valuefloat = (float)"1.01";
var_dump($valuefloat);

$nama = "wali";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;

//cara lama
echo "Hello" .$name . ", selamat belajat php" .PHP_EOL;
// pakek metode variabel parsing
echo "Hello $name selamat belajat php" .PHP_EOL; 

// untuk menggabungkan variabel dengan tanpa pakek spasi jadi bisa langsung di gabung 
$var = "wali";
echo "this is {$var}s" . PHP_EOL;


 ?>
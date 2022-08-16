<?php 

$a = 10;
$c = 10;


$a = $a + 1;
$b = $a;
//ini sama seperti ++$a , jadi dia ditambah dulu

$d = $c;
$c = $c + 1;
//ini sama seperti $a++ , jadi dia di simpan dulu baru ditambah

var_dump($b);
var_dump($c);


?>
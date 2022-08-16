<?php 
//memakai use untuk bisa akses variabel luar bagi anonymous function
//value nya langsung di copy yang di atas function anonymous nya 
$firstname = "wali";
$lastname = "ahmad";

$sayhello = function  () use ($firstname, $lastname){
    echo "Hello $lastname $firstname" .PHP_EOL;
};

$sayhello();

?>
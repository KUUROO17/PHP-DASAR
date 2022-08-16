<?php 

$name = "wali"; //local scope

function sayhello()
{
    global $name ;
    echo $name . PHP_EOL;

    /*
    default global
    setiap variabel yang di buat di global atau di luar function / local
    maka semua bisa di akses seper ti array dengan key nya adalah nama variabel nya
    itu di atur oleh default php nya jadi gak usah di buat sendiri
    cth: buatnya
    harus pakek {} untuk akses array di echo 
    */
    echo "HELLO {$GLOBALS["name"]}" .PHP_EOL; 

}

sayhello();

?>
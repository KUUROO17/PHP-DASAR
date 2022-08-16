<?php 


function foo(){
    echo "foo" .PHP_EOL;
}


function bar(){
    echo "bar" .PHP_EOL;
}

$fungtionpanggil = "foo";
$fungtionpanggil();

$fungtionpanggil = "bar";
$fungtionpanggil();

function sayhelo(string $name, $filter){
    $finalname = $filter($name);
    echo "hello $finalname" .PHP_EOL;
}

function samplefunction(string $name){
    return "sample $name";
}

//mengirim funtion ke argument di function

sayhelo("eko", "samplefunction");
sayhelo("eko", "strtoupper");
sayhelo("eko", "strtolower");

?>